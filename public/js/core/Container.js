export class Container{
    #bindings = [];
    constructor(){}

    bind(key, callback) {
        this.#bindings[key] = callback;
    }

    resolve(key) {
        const keys = Object.keys(this.#bindings);
        if (! keys.includes(key)) {
            throw new Error('Class not binding or not exists');
        }
        return this.#bindings[key]();
    }
}
