/**
 * Created by jony on 1/18/17.
 */

class C {
    constructor() {
        this.num = Math.random();
    }
    rand() {
        console.log( "Random: " + this.num );
    }
}
var c1 = new C();
c1.rand(); // "Random: 0.4324299..."
C.prototype.rand = function() {
    console.log( "Random: " + Math.round( this.num * 1000 ));
};
var c2 = new C();
c2.rand(); // "Random: 867"
c1.rand(); // "Random: 432" -- oops!!!