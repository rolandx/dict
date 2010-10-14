function initEcAd() {
document.all.AdLayer1.style.posTop = -200;
document.all.AdLayer1.style.visibility = 'visible'
document.all.AdLayer2.style.posTop = -200;
document.all.AdLayer2.style.visibility = 'visible'
MoveLeftLayer('AdLayer1');
MoveRightLayer('AdLayer2');
}
function MoveLeftLayer(layerName) {
var x = 5;
var y = 100;// 左侧广告距离页首高度
var diff = (document.documentElement.scrollTop + y - document.all.AdLayer1.style.posTop)*.40;
var y = document.documentElement.scrollTop + y - diff;
eval("document.all." + layerName + ".style.posTop = parseInt(y)");
eval("document.all." + layerName + ".style.posLeft = x");
setTimeout("MoveLeftLayer('AdLayer1');", 20);
}
function MoveRightLayer(layerName) {
var x = 5;
var y = 150;// 右侧广告距离页首高度
var diff = (document.documentElement.scrollTop + y - document.all.AdLayer2.style.posTop)*.40;
var y = document.documentElement.scrollTop + y - diff;
eval("document.all." + layerName + ".style.posTop = y");
eval("document.all." + layerName + ".style.posRight = x");
setTimeout("MoveRightLayer('AdLayer2');", 20);
}

document.write("<div id=AdLayer1 style='position: absolute;visibility:hidden;z-index:1'></div>"
+"<div id=AdLayer2 style='position: absolute;visibility:hidden;z-index:1'><a href='http://zhaoshang.2u4u.com.cn/' target='_blank'><img src=image/8.gif border='0'></a></div>");
initEcAd()

// JavaScript Document