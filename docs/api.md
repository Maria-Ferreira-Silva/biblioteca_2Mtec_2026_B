# Documentação da API - Sistema Biblioteca

Esta API utiliza o **Laravel Sanctum** para autenticação via tokens baseados em texto puro (*Bearer Token*). Todos os endpoints de recursos exigem um cabeçalho de autenticação válido.

## Autenticação

### Gerar Token de Acesso (Login)
Retorna o token necessário para autenticar as requisições protegidas.

- **URL:** `/api/login`
- **Método:** `POST`
- **Headers:** 
  - `Accept: application/json`
  - `Content-Type: application/json`
- **Body (JSON):**
```json
{
    "email": "admin@teste.com",
    "password": "12345678"
}
```

#### Resposta de Sucesso (200 OK)
```json
{
    "access_token": "2|SCYr2VUKGx7tNOsR38fitQxHGdIEb252SmTeq6dd180a5a96",
    "token_type": "Bearer"
}
```

---

## Recursos Protegidos

Para acessar os endpoints abaixo, é obrigatório enviar o cabeçalho de autorização com o token gerado no login:
`Authorization: Bearer <seu_token_aqui>`

### Listar Autores
Retorna uma lista paginada de todos os autores cadastrados no sistema, mascarando colunas internas sensíveis.

- **URL:** `/api/autores`
- **Método:** `GET`
- **Headers:** 
  - `Authorization: Bearer <token>`
  - `Accept: application/json`

#### Resposta de Sucesso (200 OK)
```json
{
    "data": [],
    "links": {
        "first": "http://localhost:8000/api/autores?page=1",
        "last": "http://localhost:8000/api/autores?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/autores?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://localhost:8000/api/autores",
        "per_page": 10,
        "to": null,
        "total": 0
    }
}
```

---

### Listar Clientes
Retorna uma lista paginada de todos os clientes cadastrados.

- **URL:** `/api/clientes`
- **Método:** `GET`

---

### Listar Gêneros
Retorna uma lista paginada de todos os gêneros literários cadastrados.

- **URL:** `/api/generos`
- **Método:** `GET`
