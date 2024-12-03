console.log('Entered external javascript file');
functionA();
function functionA() {
    let a = 'A piece of text\n';
    functionB(a);
}
function functionB(b) {
    let c = 'Another piece of text';
    console.log(b + c);
}