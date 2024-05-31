import { Api } from './../core/bootstrap.js';

$(document).ready(function() {
    Api.get('type-establishment')
        .then( async (response) => {
            const establishmentType = $('body #establishment-type')
            let selectOptions;
            for (let type of await response.data){
                selectOptions += `<option value="${type.id}">${type.name}</option>`;
            }
            establishmentType.html(selectOptions);
        })
})
