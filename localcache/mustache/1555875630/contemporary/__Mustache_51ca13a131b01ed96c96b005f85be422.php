<?php

class __Mustache_51ca13a131b01ed96c96b005f85be422 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        
        $blocksContext['classes'] = array($this, 'block4100c75ced44c533f753c4400abe0aa9');
        $blocksContext['attributes'] = array($this, 'blockFa7207c236ad725d97b70af85afe3d94');
        $blocksContext['togglelabel'] = array($this, 'block08d298351110864ae52341ae7ea3f777');
        $blocksContext['togglecontent'] = array($this, 'blockAca782a5cf6edcc8809a6f7dce19628d');
        $blocksContext['containerlabel'] = array($this, 'blockB7898d00e912bcbfd70bfe4b76efe7bb');
        $blocksContext['headertext'] = array($this, 'block5ecb834a26a635876e192061e800cfc7');
        $blocksContext['headeractions'] = array($this, 'block3a1c3ff61418e89063cdc83009e7ef3a');
        $blocksContext['content'] = array($this, 'block6f14a81c3fc82ebfdbb8779005dbab82');
        
        if ($parent = $this->mustache->loadPartial('core/popover_region')) {
            $context->pushBlockContext($blocksContext);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section1e02dd49ba0062c8210c243648dbf424($context, $indent, $value);

        return $buffer;
    }

    private function sectionE9d311101fe112f08c4725ee17f65ad1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' shownotificationwindownonew, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' shownotificationwindownonew, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c7f52d273f99ea528e3a7b6f56728eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglenotificationmenu, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglenotificationmenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e5e0b34713d04b2df144144700c7e50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/notifications, core, {{#str}} togglenotificationmenu, message {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/notifications, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2c7f52d273f99ea528e3a7b6f56728eb($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb70af33b8011de7432c8334305b6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationwindow, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' notificationwindow, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0485fa7464a648704afa92570f0944b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notifications, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52891bef9837f9da27028964220b7a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markallread ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markallread ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section312c64ea60f10c9fbf96f4e4c612411c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/markasread, core, {{#str}} markallread {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/markasread, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c109cc11ee011897152888aaf4973ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationpreferences, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4843ace6b9132f166b744f1ab48308db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core, {{#str}} notificationpreferences, message {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fd8a95ce9a614b8c5bab7e83009f0ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nonotifications, message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nonotifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e02dd49ba0062c8210c243648dbf424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
    var container = $(\'#nav-notification-popover-container\');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-notification-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerEventListeners();
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4100c75ced44c533f753c4400abe0aa9($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . 'popover-region-notifications';
    
        return $buffer;
    }

    public function blockFa7207c236ad725d97b70af85afe3d94($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= 'id="nav-notification-popover-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block08d298351110864ae52341ae7ea3f777($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE9d311101fe112f08c4725ee17f65ad1($context, $indent, $value);
    
        return $buffer;
    }

    public function blockAca782a5cf6edcc8809a6f7dce19628d($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section5e5e0b34713d04b2df144144700c7e50($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="count-container hidden" data-region="count-container"></div>
';
    
        return $buffer;
    }

    public function blockB7898d00e912bcbfd70bfe4b76efe7bb($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEb70af33b8011de7432c8334305b6a62($context, $indent, $value);
    
        return $buffer;
    }

    public function block5ecb834a26a635876e192061e800cfc7($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0485fa7464a648704afa92570f0944b7($context, $indent, $value);
    
        return $buffer;
    }

    public function block3a1c3ff61418e89063cdc83009e7ef3a($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= '        <a class="mark-all-read-button"
';
        $buffer .= $indent . '           href="#"
';
        $buffer .= $indent . '           title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           data-action="mark-all-read"
';
        $buffer .= $indent . '           role="button">
';
        $buffer .= $indent . '            <span class="normal-icon">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section312c64ea60f10c9fbf96f4e4c612411c($context, $indent, $value);
        $buffer .= '</span>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->findDot('urls.preferences'), $context);
        $buffer .= $value;
        $buffer .= '"
';
        $buffer .= $indent . '           title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section4843ace6b9132f166b744f1ab48308db($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
    
        return $buffer;
    }

    public function block6f14a81c3fc82ebfdbb8779005dbab82($context)
    {
        $indent = $buffer = '';
        $blocksContext = array();
        $buffer .= $indent . '        <div class="all-notifications"
';
        $buffer .= $indent . '            data-region="all-notifications"
';
        $buffer .= $indent . '            role="log"
';
        $buffer .= $indent . '            aria-busy="false"
';
        $buffer .= $indent . '            aria-atomic="false"
';
        $buffer .= $indent . '            aria-relevant="additions"></div>
';
        $buffer .= $indent . '        <div class="empty-message" tabindex="0" data-region="empty-message">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7fd8a95ce9a614b8c5bab7e83009f0ca($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
