import { Api } from './../core/bootstrap.js';


$(document).ready(function() {
    console.log($('body #name-error').text());
    $('body #establishment-submit').on('submit', function(e) {
        e.preventDefault();
        const data = {
            state_id: $('#state-select').val(),
            name: $('#name').val(),
            email: $('#email').val(),
            tel: $('#tel').val(),
            password: $('#password').val(),
            cep: $('#cep').val(),
            city_id: $('#city-select').val(),
            cnpj: $('#cnpj').val(),
            establishment_type_id: $('#establishment-type').val(),
            neightborhood: $('#neighborhood').val()
        };

        Api.post('establishment', data)
            .then((response) => {
                cconsole.log(response)
            })
            .catch(err => {

                if (err.response.status === 422) {
                    const errors = Object.keys(err.response.data.errors);
                    if (errors.includes('name') && !$('body #name-error').text()) $('body #name-error').append(err.response.data.errors['name'][0]);
                    if (errors.includes('email') && !$('body #email-error').text()) $('body #email-error').append(err.response.data.errors['email'][0]);
                    if (errors.includes('cnpj') && !$('body #cnpj-error').text()) $('body #cnpj-error').append(err.response.data.errors['cnpj'][0]);
                    if (errors.includes('password') && !$('body #password-error').text()) $('body #password-error').append(err.response.data.errors['password'][0]);
                    if (errors.includes('tel') && !$('body #tel-error').text()) $('body #tel-error').append(err.response.data.errors['tel'][0]);
                    if (errors.includes('state_id') && !$('body #state-error').text()) $('body #state-error').append(err.response.data.errors['state_id'][0]);
                    if (errors.includes('city_id') && !$('body #city-error').text()) $('body #city-error').append(err.response.data.errors['city_id'][0]);
                    if (errors.includes('establishment_type_id')) $('body #establishment-type-error'),append(err.response.data.errors['establishment_type_id'][0]);
                }

            })
    })
    $('body #create-images').on('submit', function(e) {
        e.preventDefault()
        const data = new FormData(this);
        Api.post('establishment-image', data)
            .then((response) => {
                console.log(response)
            })
            .catch(err => console.log(err))
    })
})
