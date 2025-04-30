
# Drupal Database APIs – Quick Reference

## Connection Methods
- `\Drupal::database()` – preferred
- `\Drupal::service('database')`
- `Database::getConnection()` (use statement)

## Query Styles

### Static
- For simple `SELECT`
- Direct SQL string

### Dynamic
- For complex queries
- Use for: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, `MERGE`

## Query Types

- `select()` – with `fields()`, `condition()`, `range()`, `execute()`
- `insert()` – `fields()`, `values()`, `execute()`
- `update()` – `fields()`, `condition()`, `execute()`
- `delete()` – `condition()`, `execute()`
- `merge()` – `key()`, `fields()`, `execute()`

## Result Fetching

- `fetchAll()` – all rows
- `fetchCol()` – single column
- `fetchAssoc()` – associative array
- `rowCount()` – row count

***

## `hook_schema()` – Create Table (Quick Notes)

### **Function**
- `mymodule_schema()`
- **Returns**: `$schema` (array of table definitions)

### Common Keys (Per Table)

| Key              | Purpose                                      |
|------------------|----------------------------------------------|
| `'description'`  | Human-readable description                   |
| `'fields'`       | Column definitions (array)                   |
| `'type'`         | Data type (`int`, `varchar`, etc.)           |
| `'length'`       | For `varchar`, e.g. `64`                     |
| `'not null'`     | Require field (`TRUE`/`FALSE`)               |
| `'default'`      | Default value if none set                    |
| `'unsigned'`     | Only positive numbers (`TRUE` for IDs)       |
| `'primary key'`  | Array of field(s) as PK                      |
| `'indexes'`      | Named index(es), e.g., `'node' => ['nid']`   |


### Drupal Schema Data Types (Common)

| Type       | Description                         |
|------------|-------------------------------------|
| `int`      | Integer (typically for IDs)         |
| `serial`   | Auto-increment primary key          |
| `varchar`  | Short text (needs `length`)         |
| `text`     | Long text                           |
| `blob`     | Binary data                         |
| `float`    | Decimal number                      |
| `datetime` | Date and time (ISO format)          |
| `numeric`  | Precision decimals (`precision`, `scale`) |

### Modifiers:
- `unsigned` – only positive values
- `not null` – field is required
- `default` – fallback if value not set
- `description` – for clarity (optional)

### Tables in `mymodule_schema()`

#### **1. `mymodule`**
- Fields:
  - `id` – primary key, `serial`
  - `uid`, `nid` – foreign keys, `int`
  - `mail` – `varchar(64)`
  - `created` – timestamp, `int`
- Indexes:
  - `node` → [`nid`]
  - `node_user` → [`nid`, `uid`]

#### **2. `mymodule_enabled`**
- Field:
  - `nid` – primary key, `int`

***

## Resources:

- [22 - Unit 3: An Introduction to the Database API](https://www.youtube.com/watch?v=MLabNrWcK7Y)
- [Database API](https://www.drupal.org/docs/develop/drupal-apis/database-api)
- [Database API Overview](https://www.drupal.org/docs/drupal-apis/database-api/database-api-overview)
- [General Concepts](https://www.drupal.org/docs/develop/drupal-apis/database-api/general-concepts)
- [Instantiating a Database Connection Object](https://www.drupal.org/docs/drupal-apis/database-api/instantiating-a-database-connection-object)
- [Static Queries](https://www.drupal.org/docs/drupal-apis/database-api/static-queries)
- [Introduction to Dynamic Queries](https://www.drupal.org/docs/8/api/database-api/dynamic-queries/introduction-to-dynamic-queries)
- [class Statement](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Database%21Statement.php/class/Statement/9)
- [Result Sets](https://www.drupal.org/docs/drupal-apis/database-api/result-sets)
- [23 - Unit 3: The Install File and Working with the Database Schema](https://www.youtube.com/watch?v=RLsCWiIOHto)
- [SQL - RDBMS Concepts](https://www.tutorialspoint.com/sql/sql-rdbms-concepts.htm)
- [Introduction to Schema API](https://www.drupal.org/node/146843)
- [Schema API](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Database%21database.api.php/group/schemaapi/9)
- [function hook_schema](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Database%21database.api.php/function/hook_schema/9)
- [Data types](https://www.drupal.org/docs/7/api/schema-api/data-types)