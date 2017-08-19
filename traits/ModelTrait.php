<?php
/*
 *          ┌─┐       ┌─┐
 *       ┌──┘ ┴───────┘ ┴──┐
 *       │                 │
 *       │       ───       │
 *       │  ─┬┘       └┬─  │
 *       │                 │
 *       │       ─┴─       │
 *       └───┐         ┌───┘
 *           │         └──────────────┐
 *           │                        ├─┐
 *           │                        ┌─┘
 *           │                        │
 *           └─┐  ┐  ┌───────┬──┐  ┌──┘
 *             │ ─┤ ─┤       │ ─┤ ─┤
 *             └──┴──┘       └──┴──┘
 *        @Author Ethan <ethan@brayun.com>
 */

namespace brayun\skeleton\traits;


trait ModelTrait
{


    /**
     * 置空
     * @return string
     */
    public function formName()
    {
        return '';
    }


    /**
     * 获取一条错误
     * @return string
     */
    public function getErrorOne()
    {

        if (!$this->hasErrors()) {
            return '';
        }
        return array_values($this->getFirstErrors())[0];
    }
}