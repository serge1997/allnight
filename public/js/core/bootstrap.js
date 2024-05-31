import { Container } from './Container.js';
import { ApiModule } from './ApiModule.js';


const container = new Container();
container.bind('ApiModule', function() {
    return new ApiModule();
});

const Api = container.resolve('ApiModule');

export {
    Api
}
