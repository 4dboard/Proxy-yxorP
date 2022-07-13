<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forms\Controller;

use LimeExtra\Controller;

class RestApi extends Controller
{

    public function submit($form): bool
    {

        $frm = $this->module('forms')->form($form);

        if (!$frm) {
            return false;
        }

        if ($data = $this->param('form', false)) {

            $options = [];

            if ($this->param('__mailsubject')) {
                $options['subject'] = $this->param('__mailsubject');
            }

            return $this->module('forms')->submit($form, $data, $options);
        }

        return false;
    }

    public function export($form): bool
    {

        $user = $this->module('yxorp')->getUser();
        $form = $this->module('forms')->form($form);

        if (!$form) {
            return false;
        }

        if ($user) {

            if (!$this->module('yxorp')->isSuperAdmin($user['group'])) {
                return $this->stop(401);
            }
        }

        return $this->module('forms')->find($form['name']);
    }
}
