<?php
if ($this->security()) {
echo '' . ((isset($this->_tpldata['.'][0]['JQUERY_INCLUDES'])) ? $this->_tpldata['.'][0]['JQUERY_INCLUDES'] : '') . '
<style>
dl {
    margin: 0;
    padding: 0;
}
dd {
    position: relative; /* IE is dumb */
    display: block;
    float: left;
    width: 800px;
    height: 100px;
    margin: 0 0 0px;
    background: url("images/bossprogress/rp/g_colorbar2.jpg");
}
* html dd { float: none; }

dd div {
    position: relative;
    background: url("images/bossprogress/rp/g_colorbar.jpg");
    height: 100px;
    width: 100%;
    text-align:right;
}
dd div strong {
    position: absolute;
    right: -5px;
    top: -2px;
    display: block;
    background: url("images/bossprogress/rp/g_marker.gif");
    height: 24px;
    width: 9px;
    text-align: left;
    text-indent: -9999px;
    overflow: hidden;
}
</style>

<style type="text/css">
img {
    behavior: url("pngfix/pngbehavior.htc");
}

</style>';
}
?>