import { Api } from './core/bootstrap.js';

$(document).ready(function() {
    listAllImage();
    async function listAllImage()
    {
        await Api.get('establishment-image')
            .then( async (response) => {
                console.log(response.data)
                const row = $('body #est-container')
                let restName = new Set();
                let imgs = "";
                for (let data of await response.data) {
                    restName.add(data.name);
                    imgs += `<img src="/img/establishments/${data.image}" />`;
                    // let img = document.createElement('img');
                    // let div = document.createElement('div');

                    // let h2 = document.createElement('h2');

                    // div.classList.add('col-md-6', 'd-flex' ,'flex-wrap');
                    // divInfo.classList.add('col-md-6', 'd-flex');
                    // img.classList.add('img-thumbnail', 'w-50')
                    // img.src = `/img/establishments/${data.image}`
                    // $('.est-name').text(data.name)
                    // divInfo.appendChild(h2);
                    // div.appendChild(img)


                }
                for (let name of restName) {
                    let img_box = document.createElement('div');
                    let divInfo = document.createElement('div');
                    divInfo.classList.add('col-md-6', 'd-flex' ,'flex-wrap');
                    img_box.classList.add('col-md-6', 'd-flex' ,'flex-wrap');
                    let h2 = document.createElement('h2');
                    h2.textContent = name
                    img_box.append(imgs);
                    divInfo.appendChild(h2);
                    row.append(img_box)
                    row.append(divInfo)
                }
                console.log(restName)
            })
    }
})
