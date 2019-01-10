var a;
a = false;
a = 56;
var b;
var c;
var d;
var e;
var colorRed = 0;
var colorGreen = 1;
var colorBlue = 2;
// or we can use enum 
// its indexing value is alway 0 1 2 3 4 5 6 
var Color;
(function (Color) {
    Color[Color["red"] = 0] = "red";
    Color[Color["green"] = 1] = "green";
    Color[Color["blue"] = 2] = "blue";
})(Color || (Color = {}));
;

var a={
	"name":12
}
console.log(Color.red);
console.log(a.name)
