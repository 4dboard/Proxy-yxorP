<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Server;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Throwable;
use yxorP\app\lib\data\graphQL\Error\DebugFlag;
use yxorP\app\lib\data\graphQL\Error\FormattedError;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Executor\ExecutionResult;
use yxorP\app\lib\data\graphQL\Executor\Promise\Promise;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\psr\http\message\streamInterface;
use function is_array;

/**
 * GraphQL server compatible with both: [express-graphql](https://github.com/graphql/express-graphql)
 * and [Apollo Server](https://github.com/apollographql/graphql-server).
 * Usage Example:
 *
 *     $server = new StandardServer([
 *       'schema' => $mySchema
 *     ]);
 *     $server->handleRequest();
 *
 * Or using [ServerConfig](reference.md#graphqlserverserverconfig) instance:
 *
 *     $config = GraphQL\Server\ServerConfig::create()
 *         ->setSchema($mySchema)
 *         ->setContext($myContext);
 *
 *     $server = new GraphQL\Server\StandardServer($config);
 *     $server->handleRequest();
 *
 * See [dedicated section in docs](executing-queries.md#using-server) for details.
 */
class StandardServer
{
    /** @var ServerConfig */
    private $config;

    /** @var Helper */
    private $helper;

    /**
     * Creates new instance of a standard GraphQL HTTP server
     *
     * @param array|ServerConfig $config
     *
     * @api
     */
    public function __construct(ServerConfig|array $config)
    {
        if (is_array($config)) {
            $config = ServerConfig::create($config);
        }
        if (!$config instanceof ServerConfig) {
            throw new InvariantViolation('Expecting valid server config, but got ' . Utils::printSafe($config));
        }
        $this->config = $config;
        $this->helper = new Helper();
    }

    /**
     * Converts and exception to error and sends spec-compliant HTTP 500 error.
     * Useful when an exception is thrown somewhere outside of server execution context
     * (e.g. during schema instantiation).
     *
     * @param Throwable $error
     * @param int $debug
     * @param bool $exitWhenDone
     *
     * @throws \Throwable
     * @api
     */
    public static function send500Error(Throwable $error, int $debug = DebugFlag::NONE, bool $exitWhenDone = false)
    {
        $response = [
            'errors' => [FormattedError::createFromException($error, $debug)],
        ];
        $helper = new Helper();
        $helper->emitResponse($response, 500, $exitWhenDone);
    }

    /**
     * Parses HTTP request, executes and emits response (using standard PHP `header` function and `echo`)
     *
     * By default (when $parsedBody is not set) it uses PHP globals to parse a request.
     * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
     * and then pass it to the server.
     *
     * See `executeRequest()` if you prefer to emit response yourself
     * (e.g. using Response object of some framework)
     *
     * @param OperationParams|OperationParams[]|null $parsedBody
     * @param bool $exitWhenDone
     *
     * @api
     */
    public function handleRequest(OperationParams|array $parsedBody = null, bool $exitWhenDone = false)
    {
        $result = $this->executeRequest($parsedBody);
        $this->helper->sendResponse($result, $exitWhenDone);
    }

    /**
     * Executes GraphQL operation and returns execution result
     * (or promise when promise adapter is different from SyncPromiseAdapter).
     *
     * By default (when $parsedBody is not set) it uses PHP globals to parse a request.
     * It is possible to implement request parsing elsewhere (e.g. using framework Request instance)
     * and then pass it to the server.
     *
     * PSR-7 compatible method executePsrRequest() does exactly this.
     *
     * @param null $parsedBody
     *
     * @return ExecutionResult|ExecutionResult[]|Promise
     *
     * @throws \yxorP\app\lib\data\graphQL\Server\RequestError
     * @api
     */
    public function executeRequest($parsedBody = null)
    {
        if ($parsedBody === null) {
            $parsedBody = $this->helper->parseHttpRequest();
        }

        if (is_array($parsedBody)) {
            return $this->helper->executeBatch($this->config, $parsedBody);
        }

        return $this->helper->executeOperation($this->config, $parsedBody);
    }

    /**
     * Executes PSR-7 request and fulfills PSR-7 response.
     *
     * See `executePsrRequest()` if you prefer to create response yourself
     * (e.g. using specific JsonResponse instance of some framework).
     *
     * @return ResponseInterface|Promise
     *
     * @api
     */
    public function processPsrRequest(
        RequestInterface  $request,
        ResponseInterface $response,
        StreamInterface   $writableBodyStream
    )
    {
        $result = $this->executePsrRequest($request);

        return $this->helper->toPsrResponse($result, $response, $writableBodyStream);
    }

    /**
     * Executes GraphQL operation and returns execution result
     * (or promise when promise adapter is different from SyncPromiseAdapter)
     *
     * @param \Psr\Http\Message\RequestInterface $request
     * @return ExecutionResult|ExecutionResult[]|Promise
     *
     * @throws \yxorP\app\lib\data\graphQL\Server\RequestError
     * @api
     */
    public function executePsrRequest(RequestInterface $request)
    {
        $parsedBody = $this->helper->parsePsrRequest($request);

        return $this->executeRequest($parsedBody);
    }

    /**
     * Returns an instance of Server helper, which contains most of the actual logic for
     * parsing / validating / executing request (which could be re-used by other server implementations)
     *
     * @return Helper
     *
     * @api
     */
    public function getHelper()
    {
        return $this->helper;
    }
}
