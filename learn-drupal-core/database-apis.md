
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