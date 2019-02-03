const STATIC_CACHE = 'static-v1';
const DYNAMIC_CACHE = 'dynamic-v1';

const APP_SHELL = [
    '/',
    'bucaramanga',
    'medellin',
    'cali',
    'css/app.css',
    'js/app.js',
    'css/bogota.jpg',
    'css/bucaramanga.jpg',
    'css/medellin.jpg',
    'css/cali.jpg'
];




self.addEventListener('install', event => {

    const respuesta = caches.open( STATIC_CACHE ).then( cache => {
                        cache.addAll( APP_SHELL );
    });


    event.waitUntil(respuesta);
});

self.addEventListener('activate', event =>{

    const respuesta = caches.keys().then( keys => {

        keys.forEach( key => {

            if( key !== STATIC_CACHE && key.includes('static')){
                return caches.delete(key);
            }

        });


    });

    event.waitUntil(respuesta);

});


self.addEventListener('fetch', event => {

    const respuesta = fetch(event.request).then( res => {

        
        
        caches.match(event.request).then(res2 => {

            console.log(res2);
            
            if (res2 == null) {
                caches.open(DYNAMIC_CACHE)
                    .then(cache => {

                        cache.put(event.request, res.clone());

                    });
               
            }
        });
      

        return res.clone();
       
       
    })
    .catch(err => {
        return caches.match(event.request);
    });

    event.respondWith(respuesta);

});


