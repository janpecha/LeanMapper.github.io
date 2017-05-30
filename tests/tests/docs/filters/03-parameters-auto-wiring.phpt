<?php

use Tester\Assert;

$container = require __DIR__ . '/../../../bootstrap.php';
$connection = $container->getConnection();

//// example

/**
 * @property int $id
 * @property string $name
 * @property Author $author m:hasOne
 */
class Book extends LeanMapper\Entity
{
}

/**
 * @property int $id
 * @property string $name
 * @property Book[] $books m:belongsToMany m:filter(bookOrderByName)
 */
class Author extends LeanMapper\Entity
{
}


$connection->registerFilter('bookOrderByName', array('BookFilter', 'orderByName'), LeanMapper\Connection::WIRE_ENTITY_AND_PROPERTY);


class BookFilter
{
	public static function orderByName(LeanMapper\Fluent $fluent, LeanMapper\Entity $entity, LeanMapper\Reflection\Property $property)
	{
		Assert::type('Author', $entity);
		Assert::type('LeanMapper\Entity', $entity);
		Assert::type('LeanMapper\Reflection\Property', $property);
	}
}


//// test
class AuthorRepository extends TestRepository
{
}

$authorRepository = $container->createRepository('AuthorRepository');
$authors = $authorRepository->findAll();
$author = reset($authors);

$author->books;

Assert::same(array(
	'SELECT * FROM [author]',
	'SELECT [book].* FROM [book] WHERE [book].[author_id] IN (1, 2, 3, 4, 5)',
), $container->getQueries()->getAll());
