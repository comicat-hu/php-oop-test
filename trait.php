<?php
/**
 * PHP version 5.6.31
 * Trait example
 *
 * @category None
 * @package  None
 * @author   comi.hu <comi.hu@104.com.tw>
 * @license  PHP License
 * @link     None
 */

trait Tag
{
    abstract public function prefix();
    abstract public function postfix();
    public function tag($name)
    {
        echo $this->prefix().$name.$this->postfix()."\n";
    }
}
class HtmlOpenTag
{
    use Tag;
    public function prefix()
    {
        return '<';
    }
    public function postfix()
    {
        return '>';
    }
}
class HtmlCloseTag
{
    use Tag;
    public function prefix()
    {
        return '</';
    }
    public function postfix()
    {
        return '>';
    }
}
class BbcodeOpenTag
{
    use Tag;
    public function prefix()
    {
        return '[ ';
    }
    public function postfix()
    {
        return ']';
    }
}
class BbcodeCloseTag
{
    use Tag;
    public function prefix()
    {
        return '[ /';
    }
    public function postfix()
    {
        return ']';
    }
}
$c = new HtmlOpenTag;
$c->tag('div');
$d = new HtmlCloseTag;
$d->tag('div');
$e = new BbcodeOpenTag;
$e->tag('url');
$f = new BbcodeCloseTag;
$f->tag('url');
