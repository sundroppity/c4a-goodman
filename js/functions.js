String.prototype.padLeft = function(len, char){
    return new Array(len - this.length + 1).join(char || " ") + this
};
String.prototype.padRight = function(len, char){
    return this + new Array(len - this.length + 1).join(char || " ");
};

Number.prototype.padLeft = function(len, char){
    return this.toString().padLeft(len, char);
};
Number.prototype.padRight = function(len, char){
    return this.toString().padRight(len, char);
};
