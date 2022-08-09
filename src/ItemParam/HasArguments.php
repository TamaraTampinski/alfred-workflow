<?php

namespace Alfred\Workflows\ItemParam;

trait HasArguments
{
    use HasParams;

    /**
     * The argument which is passed through the workflow
     * to the connected output action.
     *
     * @link https://www.alfredapp.com/help/workflows/inputs/script-filter/json/
     *
     * @param string|array $arg
     */
    public function arg($arg): self
    {
        // TODO: IS THIS A CLASS? INVESTIGATE
        $this->params['arg'] = $arg;

        return $this;
    }

    /**
     * Alias of `arg`
     *
     * @param string|array $arg
     */
    public function argument($arg): self
    {
        return $this->arg($arg);
    }
}
