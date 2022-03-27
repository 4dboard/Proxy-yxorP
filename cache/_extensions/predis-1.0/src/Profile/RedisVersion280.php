<?php /* yxorP */


namespace Predis\Profile;


use Predis\Command\ConnectionAuth;
use Predis\Command\ConnectionEcho;
use Predis\Command\ConnectionPing;
use Predis\Command\ConnectionQuit;
use Predis\Command\ConnectionSelect;
use Predis\Command\HashDelete;
use Predis\Command\HashExists;
use Predis\Command\HashGet;
use Predis\Command\HashGetAll;
use Predis\Command\HashGetMultiple;
use Predis\Command\HashIncrementBy;
use Predis\Command\HashIncrementByFloat;
use Predis\Command\HashKeys;
use Predis\Command\HashLength;
use Predis\Command\HashScan;
use Predis\Command\HashSet;
use Predis\Command\HashSetMultiple;
use Predis\Command\HashSetPreserve;
use Predis\Command\HashValues;
use Predis\Command\HyperLogLogAdd;
use Predis\Command\HyperLogLogCount;
use Predis\Command\HyperLogLogMerge;
use Predis\Command\KeyDelete;
use Predis\Command\KeyDump;
use Predis\Command\KeyExists;
use Predis\Command\KeyExpire;
use Predis\Command\KeyExpireAt;
use Predis\Command\KeyKeys;
use Predis\Command\KeyMove;
use Predis\Command\KeyPersist;
use Predis\Command\KeyPreciseExpire;
use Predis\Command\KeyPreciseExpireAt;
use Predis\Command\KeyPreciseTimeToLive;
use Predis\Command\KeyRandom;
use Predis\Command\KeyRename;
use Predis\Command\KeyRenamePreserve;
use Predis\Command\KeyRestore;
use Predis\Command\KeyScan;
use Predis\Command\KeySort;
use Predis\Command\KeyTimeToLive;
use Predis\Command\KeyType;
use Predis\Command\ListIndex;
use Predis\Command\ListInsert;
use Predis\Command\ListLength;
use Predis\Command\ListPopFirst;
use Predis\Command\ListPopFirstBlocking;
use Predis\Command\ListPopLast;
use Predis\Command\ListPopLastBlocking;
use Predis\Command\ListPopLastPushHead;
use Predis\Command\ListPopLastPushHeadBlocking;
use Predis\Command\ListPushHead;
use Predis\Command\ListPushHeadX;
use Predis\Command\ListPushTail;
use Predis\Command\ListPushTailX;
use Predis\Command\ListRange;
use Predis\Command\ListRemove;
use Predis\Command\ListSet;
use Predis\Command\ListTrim;
use Predis\Command\PubSubPublish;
use Predis\Command\PubSubPubsub;
use Predis\Command\PubSubSubscribe;
use Predis\Command\PubSubSubscribeByPattern;
use Predis\Command\PubSubUnsubscribe;
use Predis\Command\PubSubUnsubscribeByPattern;
use Predis\Command\ServerBackgroundRewriteAOF;
use Predis\Command\ServerBackgroundSave;
use Predis\Command\ServerClient;
use Predis\Command\ServerCommand;
use Predis\Command\ServerConfig;
use Predis\Command\ServerDatabaseSize;
use Predis\Command\ServerEval;
use Predis\Command\ServerEvalSHA;
use Predis\Command\ServerFlushAll;
use Predis\Command\ServerFlushDatabase;
use Predis\Command\ServerInfoV26x;
use Predis\Command\ServerLastSave;
use Predis\Command\ServerMonitor;
use Predis\Command\ServerObject;
use Predis\Command\ServerSave;
use Predis\Command\ServerScript;
use Predis\Command\ServerSentinel;
use Predis\Command\ServerShutdown;
use Predis\Command\ServerSlaveOf;
use Predis\Command\ServerSlowlog;
use Predis\Command\ServerTime;
use Predis\Command\SetAdd;
use Predis\Command\SetCardinality;
use Predis\Command\SetDifference;
use Predis\Command\SetDifferenceStore;
use Predis\Command\SetIntersection;
use Predis\Command\SetIntersectionStore;
use Predis\Command\SetIsMember;
use Predis\Command\SetMembers;
use Predis\Command\SetMove;
use Predis\Command\SetPop;
use Predis\Command\SetRandomMember;
use Predis\Command\SetRemove;
use Predis\Command\SetScan;
use Predis\Command\SetUnion;
use Predis\Command\SetUnionStore;
use Predis\Command\StringAppend;
use Predis\Command\StringBitCount;
use Predis\Command\StringBitOp;
use Predis\Command\StringBitPos;
use Predis\Command\StringDecrement;
use Predis\Command\StringDecrementBy;
use Predis\Command\StringGet;
use Predis\Command\StringGetBit;
use Predis\Command\StringGetMultiple;
use Predis\Command\StringGetRange;
use Predis\Command\StringGetSet;
use Predis\Command\StringIncrement;
use Predis\Command\StringIncrementBy;
use Predis\Command\StringIncrementByFloat;
use Predis\Command\StringPreciseSetExpire;
use Predis\Command\StringSet;
use Predis\Command\StringSetBit;
use Predis\Command\StringSetExpire;
use Predis\Command\StringSetMultiple;
use Predis\Command\StringSetMultiplePreserve;
use Predis\Command\StringSetPreserve;
use Predis\Command\StringSetRange;
use Predis\Command\StringStrlen;
use Predis\Command\StringSubstr;
use Predis\Command\TransactionDiscard;
use Predis\Command\TransactionExec;
use Predis\Command\TransactionMulti;
use Predis\Command\TransactionUnwatch;
use Predis\Command\TransactionWatch;
use Predis\Command\ZSetAdd;
use Predis\Command\ZSetCardinality;
use Predis\Command\ZSetCount;
use Predis\Command\ZSetIncrementBy;
use Predis\Command\ZSetIntersectionStore;
use Predis\Command\ZSetLexCount;
use Predis\Command\ZSetRange;
use Predis\Command\ZSetRangeByLex;
use Predis\Command\ZSetRangeByScore;
use Predis\Command\ZSetRank;
use Predis\Command\ZSetRemove;
use Predis\Command\ZSetRemoveRangeByLex;
use Predis\Command\ZSetRemoveRangeByRank;
use Predis\Command\ZSetRemoveRangeByScore;
use Predis\Command\ZSetReverseRange;
use Predis\Command\ZSetReverseRangeByScore;
use Predis\Command\ZSetReverseRank;
use Predis\Command\ZSetScan;
use Predis\Command\ZSetScore;
use Predis\Command\ZSetUnionStore;

class RedisVersion280 extends RedisProfile
{

    public function getVersion(): string
    {
        return '2.8';
    }


    public function getSupportedCommands(): array
    {
        return array(


            'EXISTS' => KeyExists::class,
            'DEL' => KeyDelete::class,
            'TYPE' => KeyType::class,
            'KEYS' => KeyKeys::class,
            'RANDOMKEY' => KeyRandom::class,
            'RENAME' => KeyRename::class,
            'RENAMENX' => KeyRenamePreserve::class,
            'EXPIRE' => KeyExpire::class,
            'EXPIREAT' => KeyExpireAt::class,
            'TTL' => KeyTimeToLive::class,
            'MOVE' => KeyMove::class,
            'SORT' => KeySort::class,
            'DUMP' => KeyDump::class,
            'RESTORE' => KeyRestore::class,


            'SET' => StringSet::class,
            'SETNX' => StringSetPreserve::class,
            'MSET' => StringSetMultiple::class,
            'MSETNX' => StringSetMultiplePreserve::class,
            'GET' => StringGet::class,
            'MGET' => StringGetMultiple::class,
            'GETSET' => StringGetSet::class,
            'INCR' => StringIncrement::class,
            'INCRBY' => StringIncrementBy::class,
            'DECR' => StringDecrement::class,
            'DECRBY' => StringDecrementBy::class,


            'RPUSH' => ListPushTail::class,
            'LPUSH' => ListPushHead::class,
            'LLEN' => ListLength::class,
            'LRANGE' => ListRange::class,
            'LTRIM' => ListTrim::class,
            'LINDEX' => ListIndex::class,
            'LSET' => ListSet::class,
            'LREM' => ListRemove::class,
            'LPOP' => ListPopFirst::class,
            'RPOP' => ListPopLast::class,
            'RPOPLPUSH' => ListPopLastPushHead::class,


            'SADD' => SetAdd::class,
            'SREM' => SetRemove::class,
            'SPOP' => SetPop::class,
            'SMOVE' => SetMove::class,
            'SCARD' => SetCardinality::class,
            'SISMEMBER' => SetIsMember::class,
            'SINTER' => SetIntersection::class,
            'SINTERSTORE' => SetIntersectionStore::class,
            'SUNION' => SetUnion::class,
            'SUNIONSTORE' => SetUnionStore::class,
            'SDIFF' => SetDifference::class,
            'SDIFFSTORE' => SetDifferenceStore::class,
            'SMEMBERS' => SetMembers::class,
            'SRANDMEMBER' => SetRandomMember::class,


            'ZADD' => ZSetAdd::class,
            'ZINCRBY' => ZSetIncrementBy::class,
            'ZREM' => ZSetRemove::class,
            'ZRANGE' => ZSetRange::class,
            'ZREVRANGE' => ZSetReverseRange::class,
            'ZRANGEBYSCORE' => ZSetRangeByScore::class,
            'ZCARD' => ZSetCardinality::class,
            'ZSCORE' => ZSetScore::class,
            'ZREMRANGEBYSCORE' => ZSetRemoveRangeByScore::class,


            'PING' => ConnectionPing::class,
            'AUTH' => ConnectionAuth::class,
            'SELECT' => ConnectionSelect::class,
            'ECHO' => ConnectionEcho::class,
            'QUIT' => ConnectionQuit::class,


            'INFO' => ServerInfoV26x::class,
            'SLAVEOF' => ServerSlaveOf::class,
            'MONITOR' => ServerMonitor::class,
            'DBSIZE' => ServerDatabaseSize::class,
            'FLUSHDB' => ServerFlushDatabase::class,
            'FLUSHALL' => ServerFlushAll::class,
            'SAVE' => ServerSave::class,
            'BGSAVE' => ServerBackgroundSave::class,
            'LASTSAVE' => ServerLastSave::class,
            'SHUTDOWN' => ServerShutdown::class,
            'BGREWRITEAOF' => ServerBackgroundRewriteAOF::class,


            'SETEX' => StringSetExpire::class,
            'APPEND' => StringAppend::class,
            'SUBSTR' => StringSubstr::class,


            'BLPOP' => ListPopFirstBlocking::class,
            'BRPOP' => ListPopLastBlocking::class,


            'ZUNIONSTORE' => ZSetUnionStore::class,
            'ZINTERSTORE' => ZSetIntersectionStore::class,
            'ZCOUNT' => ZSetCount::class,
            'ZRANK' => ZSetRank::class,
            'ZREVRANK' => ZSetReverseRank::class,
            'ZREMRANGEBYRANK' => ZSetRemoveRangeByRank::class,


            'HSET' => HashSet::class,
            'HSETNX' => HashSetPreserve::class,
            'HMSET' => HashSetMultiple::class,
            'HINCRBY' => HashIncrementBy::class,
            'HGET' => HashGet::class,
            'HMGET' => HashGetMultiple::class,
            'HDEL' => HashDelete::class,
            'HEXISTS' => HashExists::class,
            'HLEN' => HashLength::class,
            'HKEYS' => HashKeys::class,
            'HVALS' => HashValues::class,
            'HGETALL' => HashGetAll::class,


            'MULTI' => TransactionMulti::class,
            'EXEC' => TransactionExec::class,
            'DISCARD' => TransactionDiscard::class,


            'SUBSCRIBE' => PubSubSubscribe::class,
            'UNSUBSCRIBE' => PubSubUnsubscribe::class,
            'PSUBSCRIBE' => PubSubSubscribeByPattern::class,
            'PUNSUBSCRIBE' => PubSubUnsubscribeByPattern::class,
            'PUBLISH' => PubSubPublish::class,


            'CONFIG' => ServerConfig::class,


            'PERSIST' => KeyPersist::class,


            'STRLEN' => StringStrlen::class,
            'SETRANGE' => StringSetRange::class,
            'GETRANGE' => StringGetRange::class,
            'SETBIT' => StringSetBit::class,
            'GETBIT' => StringGetBit::class,


            'RPUSHX' => ListPushTailX::class,
            'LPUSHX' => ListPushHeadX::class,
            'LINSERT' => ListInsert::class,
            'BRPOPLPUSH' => ListPopLastPushHeadBlocking::class,


            'ZREVRANGEBYSCORE' => ZSetReverseRangeByScore::class,


            'WATCH' => TransactionWatch::class,
            'UNWATCH' => TransactionUnwatch::class,


            'OBJECT' => ServerObject::class,
            'SLOWLOG' => ServerSlowlog::class,


            'CLIENT' => ServerClient::class,


            'PTTL' => KeyPreciseTimeToLive::class,
            'PEXPIRE' => KeyPreciseExpire::class,
            'PEXPIREAT' => KeyPreciseExpireAt::class,


            'PSETEX' => StringPreciseSetExpire::class,
            'INCRBYFLOAT' => StringIncrementByFloat::class,
            'BITOP' => StringBitOp::class,
            'BITCOUNT' => StringBitCount::class,


            'HINCRBYFLOAT' => HashIncrementByFloat::class,


            'EVAL' => ServerEval::class,
            'EVALSHA' => ServerEvalSHA::class,
            'SCRIPT' => ServerScript::class,


            'TIME' => ServerTime::class,
            'SENTINEL' => ServerSentinel::class,


            'SCAN' => KeyScan::class,


            'BITPOS' => StringBitPos::class,


            'SSCAN' => SetScan::class,


            'ZSCAN' => ZSetScan::class,
            'ZLEXCOUNT' => ZSetLexCount::class,
            'ZRANGEBYLEX' => ZSetRangeByLex::class,
            'ZREMRANGEBYLEX' => ZSetRemoveRangeByLex::class,


            'HSCAN' => HashScan::class,


            'PUBSUB' => PubSubPubsub::class,


            'PFADD' => HyperLogLogAdd::class,
            'PFCOUNT' => HyperLogLogCount::class,
            'PFMERGE' => HyperLogLogMerge::class,


            'COMMAND' => ServerCommand::class,
        );
    }
}
