# PruebaGCOMM
Esta es un API creada para la prueba de habilidades GCOMM Develper Skill Validation  

#### Instalacion
Es necesario descargar el archivo o clonar el repositorio desde git.

##### Modificacion del archivo .env
Antes de poder seguir este paso es necesario que tengas una base de datos creada.   
Despues de crearla se modificara el archivo .env en la ruta \pruebaFR\.env dentro del API.  
Datos de ejemplo:    
`DB_CONNECTION=mysql`  
`DB_HOST=127.0.0.1`  
`DB_PORT=3306`  
`DB_DATABASE=pets`  
`DB_USERNAME=root`  
`DB_PASSWORD=`  

##### Composer Install
Ve al directorio desde la terminal y corre los siguientes comandos para installar los paquetes de composer.
###### `composer install`
##### Run Migration
Corre el siguiente comando para crear las migraciones en la base de datos.
###### `php artisan migrate`
##### Database Seeding
Finalmente corre el siguiente comando para generar datos en la base de datos con datos de prueba.
###### `php artisan db:seed`

### API EndPoints
##### Post
* Post GET All `http://localhost:8000/pets/`
###### Repuesta de ejemplo:
`[  
    {  
        "id": 2,  
        "name": "Norma",  
        "created_at": "2021-09-02T02:54:42.000000Z",  
        "updated_at": "2021-09-02T02:54:42.000000Z"  
    },  
    {  
        "id": 3,  
        "name": "Delia",  
        "created_at": "2021-09-02T02:54:42.000000Z",  
        "updated_at": "2021-09-02T02:54:42.000000Z"  
    },`  
* Post GET Single `http://localhost:8000/pets/?limit=`  
> Es necesario agregar un limite al final de la peticion.  
> Ejemplo: `http://localhost:8000/pets/?limit=3`  
###### Repuesta de ejemplo:
`[  
    {  
        "id": 2,  
        "name": "Norma",  
        "created_at": "2021-09-02T02:54:42.000000Z",  
        "updated_at": "2021-09-02T02:54:42.000000Z"  
    },  
    {  
        "id": 3,  
        "name": "Delia",  
        "created_at": "2021-09-02T02:54:42.000000Z",  
        "updated_at": "2021-09-02T02:54:42.000000Z"  
    },  
    {  
        "id": 4,  
        "name": "Delores",  
        "created_at": "2021-09-02T02:54:42.000000Z",  
        "updated_at": "2021-09-02T02:54:42.000000Z"  
    }  
]`  
* Post GET Single `http://localhost:8000/pets/1`  
> El numero al final de la peticion indica el indice del registro.  
###### Repuesta de ejemplo:
` {  
    "id": 13,  
    "name": "Jerrell",  
    "created_at": "2021-09-02T02:54:43.000000Z",  
    "updated_at": "2021-09-02T02:54:43.000000Z"  
} `  
* Post POST Create `http://localhost:8000/pets/?name=`
> Es necesario agregar un nombre al final de la peticion.  
> Ejemplo: `http://localhost:8000/pets/?limit=nuevo`
###### Repuesta de ejemplo:
`{
    "name": "nuevo",
    "updated_at": "2021-09-02T18:34:24.000000Z",
    "created_at": "2021-09-02T18:34:24.000000Z",
    "id": 102
}`  
* Post PUT Update `http://localhost:8000/api/v1/posts/101`
> Es necesario agregar el nuevo nombre en la peticion.  
###### Repuesta de ejemplo:
`{
    "id": 101,
    "name": "nuevo",
    "created_at": "2021-09-02T16:52:47.000000Z",
    "updated_at": "2021-09-02T16:52:47.000000Z"
}`  
* Post DELETE Delete `http://localhost:8000/api/v1/posts/102`
> El numero al final de la peticion indica el indice del registro.  
