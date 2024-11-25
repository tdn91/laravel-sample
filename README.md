# Laravel Sample Project
## Installation
Run the following commands:
```
- git clone
- cp .env.example .env
- docker compose build
- docker compose up -d
- docker exec web php artisan migrate --force
- docker exec web php artisan db:seed --force
```

Laravel app is available under http://localhost:8000

## Requests / Responses examples
### Get token
*Request*
```
POST http://localhost:8000/api/login
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831

{
    "email": "admin@admin.com",
    "password": "password"
}
```

*Response*
```
{
  "token": "2|sJLTGyvWvvSacHJ33bpgKlgevAyZM7OIQOYeRhjxd138e9da"
}
```

### Get products
*Request*
```
GET http://localhost:8000/api/products
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831
```
*Response*
```
{
  "data": [
    {
      "id": 405,
      "name": "Sample3335",
      "category": {
        "id": 15,
        "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
      },
      "created_at": "2024-11-25T17:08:59.000000Z"
    },
    {
      "id": 403,
      "name": "Sample1",
      "category": {
        "id": 15,
        "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
      },
      "created_at": "2024-11-25T17:00:13.000000Z"
    },
    {
      "id": 402,
      "name": "Sample",
      "category": {
        "id": 15,
        "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
      },
      "created_at": "2024-11-25T16:58:37.000000Z"
    },
    {
      "id": 400,
      "name": "Hills-Roob",
      "category": {
        "id": 17,
        "name": "March Hare will be much the most curious thing I ever saw one that size? Why, it fills the whole."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 399,
      "name": "Sauer PLC",
      "category": {
        "id": 3,
        "name": "Alice. 'And where HAVE my shoulders got to? And oh, I wish you could draw treacle out of court!."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 398,
      "name": "Grimes, Will and Wilderman",
      "category": {
        "id": 11,
        "name": "I vote the young lady tells us a story.' 'I'm afraid I can't tell you his history,' As they walked."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 397,
      "name": "Collier PLC",
      "category": {
        "id": 2,
        "name": "It's by far the most curious thing I ever was at in all their simple sorrows, and find a number of."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 396,
      "name": "Stracke-Hansen",
      "category": {
        "id": 4,
        "name": "Queen left off, quite out of court! Suppress him! Pinch him! Off with his head!' or 'Off with his."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 395,
      "name": "Nader, Kohler and Abernathy",
      "category": {
        "id": 10,
        "name": "And so she set off at once, she found that it signifies much,' she said to the end of every line."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    },
    {
      "id": 394,
      "name": "Hand LLC",
      "category": {
        "id": 13,
        "name": "It's by far the most curious thing I ever saw one that size? Why, it fills the whole party look so."
      },
      "created_at": "2024-11-25T16:50:23.000000Z"
    }
  ],
  "links": {
    "first": "http:\/\/localhost:8000\/api\/products?page=1",
    "last": "http:\/\/localhost:8000\/api\/products?page=21",
    "prev": null,
    "next": "http:\/\/localhost:8000\/api\/products?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 21,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=2",
        "label": "2",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=3",
        "label": "3",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=4",
        "label": "4",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=5",
        "label": "5",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=6",
        "label": "6",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=7",
        "label": "7",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=8",
        "label": "8",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=9",
        "label": "9",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=10",
        "label": "10",
        "active": false
      },
      {
        "url": null,
        "label": "...",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=20",
        "label": "20",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=21",
        "label": "21",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/products?page=2",
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http:\/\/localhost:8000\/api\/products",
    "per_page": 10,
    "to": 10,
    "total": 203
  }
}
```

### Get a specific product by its id
*Request*
```
GET http://localhost:8000/api/products/402
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831
```

*Response*
```
{
  "data": {
    "id": 402,
    "name": "Sample",
    "description": null,
    "user": {
      "id": 1,
      "name": "Admin",
      "email": "admin@admin.com",
      "email_verified_at": "2024-11-25T13:47:42.000000Z",
      "created_at": "2024-11-25T13:47:42.000000Z",
      "updated_at": "2024-11-25T13:47:42.000000Z"
    },
    "category": {
      "id": 15,
      "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
    },
    "status": {
      "id": 1,
      "name": "pending"
    },
    "country": {
      "id": 157,
      "name": "Croatia"
    },
    "created_at": "2024-11-25T16:58:37.000000Z",
    "updated_at": "2024-11-25T16:58:37.000000Z"
  }
}
```

### Get approved only products for dropdown list
*Request*
```
GET http://localhost:8000/api/products/dropdown
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831
```

*Response*
```
{
  "data": [
    {
      "id": 201,
      "name": "Schulist, Mann and Dietrich"
    },
    {
      "id": 207,
      "name": "Rutherford Inc"
    },
    {
      "id": 209,
      "name": "Nienow, Balistreri and Berge"
    },
    {
      "id": 212,
      "name": "Larkin-Bartell"
    },
    {
      "id": 215,
      "name": "Parisian Ltd"
    },
    {
      "id": 216,
      "name": "Harber, Herman and Spencer"
    },
    {
      "id": 217,
      "name": "Douglas, Breitenberg and Fadel"
    },
    {
      "id": 219,
      "name": "Thompson-Bechtelar"
    },
    {
      "id": 220,
      "name": "Conn, Price and Ondricka"
    },
    {
      "id": 221,
      "name": "Hodkiewicz Inc"
    },
    {
      "id": 229,
      "name": "Bartoletti, Harber and Dickinson"
    },
    {
      "id": 231,
      "name": "Streich Group"
    },
    {
      "id": 233,
      "name": "Bayer Ltd"
    },
    {
      "id": 237,
      "name": "Dickens-Altenwerth"
    },
    {
      "id": 239,
      "name": "Jenkins-Upton"
    },
    {
      "id": 256,
      "name": "Fay-Medhurst"
    },
    {
      "id": 257,
      "name": "Reilly PLC"
    },
    {
      "id": 259,
      "name": "Orn LLC"
    },
    {
      "id": 264,
      "name": "Smith-Murray"
    },
    {
      "id": 266,
      "name": "Sawayn PLC"
    },
    {
      "id": 269,
      "name": "Kuhn-Veum"
    },
    {
      "id": 270,
      "name": "Gleichner Inc"
    },
    {
      "id": 271,
      "name": "Hagenes, Hand and Purdy"
    },
    {
      "id": 273,
      "name": "Grant, Morissette and Kunde"
    },
    {
      "id": 279,
      "name": "Jakubowski-Vandervort"
    },
    {
      "id": 281,
      "name": "Bednar PLC"
    },
    {
      "id": 283,
      "name": "Witting, Stehr and Dickens"
    },
    {
      "id": 286,
      "name": "Weissnat-Mueller"
    },
    {
      "id": 287,
      "name": "Simonis-Mante"
    },
    {
      "id": 288,
      "name": "Gislason PLC"
    },
    {
      "id": 289,
      "name": "Krajcik and Sons"
    },
    {
      "id": 290,
      "name": "Zulauf, Reynolds and Hermann"
    },
    {
      "id": 292,
      "name": "Hirthe-Kautzer"
    },
    {
      "id": 293,
      "name": "Mayert, Hirthe and Keeling"
    },
    {
      "id": 295,
      "name": "Funk and Sons"
    },
    {
      "id": 296,
      "name": "Walsh-Wolf"
    },
    {
      "id": 298,
      "name": "Stoltenberg, Murazik and Koss"
    },
    {
      "id": 299,
      "name": "Harber and Sons"
    },
    {
      "id": 300,
      "name": "Cronin Ltd"
    },
    {
      "id": 303,
      "name": "Miller LLC"
    },
    {
      "id": 306,
      "name": "Toy, Waelchi and Satterfield"
    },
    {
      "id": 307,
      "name": "Okuneva Ltd"
    },
    {
      "id": 314,
      "name": "Schmitt, Kuphal and Wehner"
    },
    {
      "id": 315,
      "name": "Waters Ltd"
    },
    {
      "id": 317,
      "name": "O'Hara and Sons"
    },
    {
      "id": 319,
      "name": "Hickle-Emard"
    },
    {
      "id": 320,
      "name": "Terry and Sons"
    },
    {
      "id": 321,
      "name": "Bernier-Gleichner"
    },
    {
      "id": 322,
      "name": "Stehr PLC"
    },
    {
      "id": 324,
      "name": "Johns-Schmeler"
    },
    {
      "id": 327,
      "name": "Bergstrom, Luettgen and Reynolds"
    },
    {
      "id": 329,
      "name": "Nader, Schultz and Dickinson"
    },
    {
      "id": 330,
      "name": "Dooley PLC"
    },
    {
      "id": 333,
      "name": "Schamberger-O'Conner"
    },
    {
      "id": 334,
      "name": "Kris Inc"
    },
    {
      "id": 335,
      "name": "Huels Group"
    },
    {
      "id": 340,
      "name": "Friesen, Raynor and Grant"
    },
    {
      "id": 341,
      "name": "Bayer Inc"
    },
    {
      "id": 346,
      "name": "Bednar, Keebler and Murray"
    },
    {
      "id": 348,
      "name": "Weber, Dicki and Hansen"
    },
    {
      "id": 352,
      "name": "Beier Inc"
    },
    {
      "id": 355,
      "name": "Rath Ltd"
    },
    {
      "id": 358,
      "name": "Kunde-Lakin"
    },
    {
      "id": 362,
      "name": "Littel LLC"
    },
    {
      "id": 368,
      "name": "Borer and Sons"
    },
    {
      "id": 369,
      "name": "Lubowitz, Klein and Frami"
    },
    {
      "id": 370,
      "name": "Roob-Roob"
    },
    {
      "id": 371,
      "name": "Kuvalis, Veum and Graham"
    },
    {
      "id": 374,
      "name": "Hintz, Zemlak and Barton"
    },
    {
      "id": 375,
      "name": "Haag Ltd"
    },
    {
      "id": 376,
      "name": "Cartwright-Rolfson"
    },
    {
      "id": 378,
      "name": "Dicki, Howell and Kovacek"
    },
    {
      "id": 383,
      "name": "Schinner, Nitzsche and Ruecker"
    },
    {
      "id": 384,
      "name": "Jacobi, Sauer and Homenick"
    },
    {
      "id": 386,
      "name": "Kris-Labadie"
    },
    {
      "id": 389,
      "name": "Pouros, Erdman and Welch"
    },
    {
      "id": 391,
      "name": "Thompson, Rempel and Davis"
    },
    {
      "id": 392,
      "name": "Becker-Jerde"
    },
    {
      "id": 393,
      "name": "Ritchie, Rosenbaum and Wyman"
    },
    {
      "id": 395,
      "name": "Nader, Kohler and Abernathy"
    }
  ]
}
```

### Create a product
*Request*
```
POST http://localhost:8000/api/products
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831

{
    "name": "Sample product",
    "description": "Description",
    "status_id":  1,
    "category_id": 15,
    "country_id": 157
}
```
*Response*
```
{
  "data": {
    "id": 406,
    "name": "Sample product",
    "description": "Description",
    "user": {
      "id": 1,
      "name": "Admin",
      "email": "admin@admin.com",
      "email_verified_at": "2024-11-25T13:47:42.000000Z",
      "created_at": "2024-11-25T13:47:42.000000Z",
      "updated_at": "2024-11-25T13:47:42.000000Z"
    },
    "category": {
      "id": 15,
      "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
    },
    "status": {
      "id": 1,
      "name": "pending"
    },
    "country": {
      "id": 157,
      "name": "Croatia"
    },
    "created_at": "2024-11-25T17:43:03.000000Z",
    "updated_at": "2024-11-25T17:43:03.000000Z"
  }
}
```

### Update a product
*Request*
```
PUT http://localhost:8000/api/products/402
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831

{
    "name": "Another sample product",
    "description": "Description",
    "status_id":  1,
    "category_id": 15,
    "country_id": 157
}
```
*Response*
```
{
  "data": {
    "id": 402,
    "name": "Another sample product",
    "description": "Description",
    "user": {
      "id": 1,
      "name": "Admin",
      "email": "admin@admin.com",
      "email_verified_at": "2024-11-25T13:47:42.000000Z",
      "created_at": "2024-11-25T13:47:42.000000Z",
      "updated_at": "2024-11-25T13:47:42.000000Z"
    },
    "category": {
      "id": 15,
      "name": "Alice to herself. (Alice had been to the Queen. 'Their heads are gone, if it makes me grow larger."
    },
    "status": {
      "id": 1,
      "name": "pending"
    },
    "country": {
      "id": 157,
      "name": "Croatia"
    },
    "created_at": "2024-11-25T16:58:37.000000Z",
    "updated_at": "2024-11-25T17:44:57.000000Z"
  }
}
```

### Delete a product
*Request*
```
DELETE http://localhost:8000/api/products/402
Accept: application/json
Content-Type: application/json
Authorization: Bearer 1|2x8FxRsm9LJh6QJImyuC9uFoJ2NyjeZJTY8ulUsbb1abb831
```
*Response*
```
[
  "Deleted successfully"
]
```
