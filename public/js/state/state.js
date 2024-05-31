import { Api } from './../core/bootstrap.js';
Api.get('states')
    .then( async (response) => {
        const selectTag = $('#state-select');
        let selectOptions;
        for (let state of await response.data) {
            selectOptions += `<option value="${state.id}">${state.name}</option>`.replace('undefined', '')
        }
        selectTag.html(selectOptions);
    })
