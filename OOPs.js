var Point = /** @class */ (function () {
    function Point(x, y) {
        this.x = x;
        this.y = y;
    }
    Point.prototype.draw = function () {
        console.log('(' + this.x + " , " + this.y + ")");
    };
    Point.prototype.getData = function () {
        return this.x + " " + this.y;
    };
    // Object.defineProperty(Point.prototype, "X", {
    //     get: function () {
    //         return this.x;
    //     },
    //     set: function (value) {
    //         this.x = value;
    //     },
    //     enumerable: true,
    //     configurable: true
    // });
    // sayHi(){
    //     console.log("hi this is test")
    // }
    Point.prototype.sayHi = function (str) {
        if (typeof str === "string") {
            console.log("hi this is test" + str);
        }
        else {
            console.log("hi this is test");
        }
    };
    return Point;
}());
var P = new Point();
// P.x=78;
// P.y=789;
P.draw();
P.sayHi();
P.sayHi("khalid");
