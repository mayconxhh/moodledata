<?php

class __Mustache_43122465f36f2cd3876a56e58d413244 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="option">
';
        $buffer .= $indent . '    <label for="item_';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="radio" name="';
        $value = $this->resolveValue($context->find('paramname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="item_';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <span class="modicon">
';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->sectionAe96637d804e3644f732257bd6cae01a($context, $indent, $value);
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="typename">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="typesummary">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAe96637d804e3644f732257bd6cae01a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/pix_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/pix_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
