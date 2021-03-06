---
title: Changelog
redirect_from: "/changelog"
---

## [Vývojová verze](https://github.com/Tharos/LeanMapper/tree/develop)

* `m:enum` umožňuje použít neprefixované konstanty (`SomeClass::*`) ([#100](https://github.com/Tharos/LeanMapper/pull/100))


## [3.1.1](https://github.com/Tharos/LeanMapper/tree/v3.1.1) (10. 7. 2016)

[Oznámení na GitHubu (anglicky)](https://github.com/Tharos/LeanMapper/releases/tag/v3.1.1)

* Nette DI rozšíření - opravena kompatibilita s Nette 2.4

* Známé chyby:
	[#97](https://github.com/Tharos/LeanMapper/pull/97)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v3.1.0...v3.1.1?expand=1).


## [3.1.0](https://github.com/Tharos/LeanMapper/tree/v3.1.0) (9. 5. 2016)

[Oznámení na GitHubu (anglicky)](https://github.com/Tharos/LeanMapper/releases/tag/v3.1.0)

* Opravena chyba [#85](https://github.com/Tharos/LeanMapper/issues/85)

* Vylepšeny chybové hlášky

* `Entity::get` vrací `null` pro nullable položky detachovaných entit

* `Entity::get` a `Entity::set` umožňuje přes `passThru` změnu datového typu (BC break)

* Nette DI rozšíření - opravena chyba [#95](https://github.com/Tharos/LeanMapper/pull/95)

* Vyžaduje PHP 5.4 nebo vyšší (BC break)

* Místo zastaralého balíčku `dg/dibi` vyžaduje `dibi/dibi`

* Známé chyby:
	[#97](https://github.com/Tharos/LeanMapper/pull/97)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v3.0.0...v3.1.0?expand=1).


## [3.0.0](https://github.com/Tharos/LeanMapper/tree/v3.0.0) (8. 3. 2016)

[Oznámení na GitHubu (anglicky)](https://github.com/Tharos/LeanMapper/releases/tag/v3.0.0)

* Vylepšen výkon

* Vyžaduje Dibi 3.x (BC break)

* Přidáno rozšíření pro Nette DI (obsahuje chybu [#95](https://github.com/Tharos/LeanMapper/pull/95))

* Přidána anotace `m:default` jako alternativa pro nastavení výchozí hodnoty property

* Přidána anotace `m:column` jako alternativa pro nastavení názvu sloupce

* Známé chyby:
	[#85](https://github.com/Tharos/LeanMapper/issues/85),
	[#95](https://github.com/Tharos/LeanMapper/pull/95),
	[#97](https://github.com/Tharos/LeanMapper/pull/97)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v2.3.0...v3.0.0?expand=1).


## [2.3.0](https://github.com/Tharos/LeanMapper/tree/v2.3.0) (9. 2. 2016)

* Přidána podpora pro `ResultProxy`

	[Informace na GitHubu](https://github.com/Tharos/LeanMapper/issues/53#issuecomment-41611844)

* Zjednodušeno a vylepšeno rozhraní entity, kód z magických metod `Entity::__get` a `Entity::__set` přesunut do nových metod `Entity::get` a `Entity::set`

* Změněna viditelnost metody `Entity::mergeFilters` na `protected`

* Vylepšena metoda `Entity::__isset` ([commit](https://github.com/Tharos/LeanMapper/commit/b4a9dc7d99227d68721e4df23e3049d62c0a82dc))

* Vylepšen výkon

* Opravena chyba [#73](https://github.com/Tharos/LeanMapper/issues/73)

* Různá vylepšení a opravy

* Známé chyby:
	[#85](https://github.com/Tharos/LeanMapper/issues/85),
	[#97](https://github.com/Tharos/LeanMapper/pull/97)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v2.2.0...v2.3.0?expand=1).


## [2.2.0](https://github.com/Tharos/LeanMapper/tree/v2.2.0) (27. 4. 2014)

[Oznámení na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=22#p124335)

* Zachovávání kolekce ID ve Fluent

	[Informace na GitHubu](https://github.com/Tharos/LeanMapper/issues/30)

* Nová metoda  Connection::hasFilter

	[Informace na GitHubu](https://github.com/Tharos/LeanMapper/pull/26)

* Nově se lze odkazovat na aliasy v SQL

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=20#p119516)

* [„Preloading“](https://github.com/Tharos/LeanMapper/commit/f21c9f7898633ece4ac30fdc9b73f43824a6d09d), který umožňuje vznik [nadstavby zvané LQL](https://github.com/Tharos/LeanMapper/issues/46)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v2.1.0...v2.2.0?expand=1).


## [2.1.0](https://github.com/Tharos/LeanMapper/tree/v2.1.0) (13. 12. 2013)

[Oznámení na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=18#p115098)

* Přidáno rozhraní `IEntityFactory` včetně výchozí implementace `DefaultEntityFactory` (BC break)

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=15#p113095)

* Zásadní zlepšení chybových hlášek

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=15#p113095)

* Implicitní filtry

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=16#p113453)

* Anonymní filtry

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=16#p114029)

* Dekompozice `Entity::__get` a `Entity::__set`

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=17#p114413)

* `Entity::createCollection` a `Repository::createCollection` přesunuto do `IEntityFactory::createCollection` (BC break)

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=17#p114393)

* přidána podpora pro výchozí hodnoty (v anotaci) null a prázdný řetězec

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=18#p114545)

* z vlastních getterů a setterů se lze nově odkazovat na `__get` a `__set`

	[Informace na fóru](https://forum.dibiphp.com/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=18#p115096)

Všechny změny lze vidět v tomto [diffu](https://github.com/Tharos/LeanMapper/compare/v2.0.1...v2.1.0?expand=1).


## [2.0.1](https://github.com/Tharos/LeanMapper/tree/v2.0.1) (12. 9. 2013)

* Přidány metody `LeanMapper\Result::cleanReferencingResultsCache` a `LeanMapper\Row::cleanReferencingRowsCache`.

	[Informace na GitHubu](https://github.com/Tharos/LeanMapper/issues/10)


## [2.0.0](https://github.com/Tharos/LeanMapper/tree/v2.0.0) (26. 8. 2013)

* Přidána podpora pro vlastní konvence – rozhraní `LeanMapper\IMapper` a defaultní implementace `LeanMapper\DefaultMapper` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=4#p105850)

	[Ukázka hezkého mapperu od Jana Nedbala](http://pastebin.com/dZjk1qaw)

* Odstraněna přežitá metoda `LeanMapper\Entity::getEntityClass`, je žádoucí použít `LeanMapper\IMapper::getEntityClass` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=9#p108540)

* Odstraněna přežitá metoda `LeanMapper\Repository::getEntityClass`, je žádoucí použít `LeanMapper\IMapper::getEntityClass` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=9#p108540)

* Přidána protected metoda `LeanMapper\Entity::initDefaults`

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=4#p105770)

* Přidána podpora pro výchozí hodnoty uvedené v anotacích

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=9#p108616)

* Přidána podpora pro správu jednoduchých M:N vazeb

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=4#p105942)

* Přidána podpora pro single table inehritance

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=5#p106593)

* Vylepšena podpora výčtového typu (přidána metoda `LeanMapper\Reflection\Property::getEnumValues`)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=6#p107052)

* Zlepšen parser anotací, přidány nové příznaky a odstraněn příznak `m:extra` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=8#p107950)

* Přidán whitelist do metody `LeanMapper\Entity::getData`

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=8#p107950)

* Přepracován systém filtrů – nové třídy `LeanMapper\Connection` a `LeanMapper\Fluent` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=9#p108425) \\
	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=9#p108493)

* Přidán systém událostí

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=10#p108822) \\
	[Propojení s Kdyby\Events](http://forum.nette.org/cs/15165-observer-v-nette-mam-spravny-navrh#p108884)

* Provedena dekompozice `LeanMapper\Repository` (vyčleněny protected metody `Repository::insertIntoDatabase`, `Repository::updateInDatabase`, `Repository::deleteFromDatabase`)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=11#p109028)

* Přejmenovány metody `markAsCreated` na `markAsAttached` (BC break)

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=11#p109108)

* Přidána metoda `LeanMapper\Entity::__isset`

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=11#p109211)

* Entity není možné vytvářet z detached `LeanMapper\Row` (BC break)

* Změněna viditelnost několika metod (všechny na méně omezující variantu)

* Zlepšen výkon jádra a in-memory cache

* Vylepšeny chybové hlášky

* Při přístupu k položce mají metody vždy přednost před anotacemi

	[Informace na Nette fóru](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi?p=8#p107950)


## [1.4.0](https://github.com/Tharos/LeanMapper/tree/v1.4.0) (21. 6. 2013)

* V `LeanMapper\Result` se negeneruje `SELECT *`, ale `SELECT table.*` (teoreticky je to BC break)

* Statická proměnná `LeanMapper\Repository::$defaultEntityNamespace` byla nahrazena stejnojmennou protected proměnnou (BC break)

* Hodnota anotace `@entity` nad repositářem může být fully qualified (začíná `\`) a pokud není, tak se využívá `$defaultEntityNamespace` (BC break)

* Nízkoúrovňová metoda `getModifiedData()` byla přejmenována na `getModifiedRowData()`, byla doplněna nízkoúrovňová `getRowData()` a vysokoúrovňová `getData()` (BC break)

* Konstruktor entity nově umí přijmout i pole nebo instanci `Traversable`

* Do `Repository` a `Entity` byla doplněna protected metoda `createCollection()`, jejímž přetížením lze zařídit, aby Lean Mapper vracel skupinu entit v nějaké uživatelské kolekci namísto jednoduchého `array`

* Upraven `AliasesParser` tak, že stavovým automatem prochází jenom ty části kódu, ve kterých může být nějaký `use` (významné zlepšení výkonu)

* Upravena kontrola typů položek tak, že jsou přijímány i potomci vyžadovaných tříd (pokud položka vyžaduje `DateTime`, nově prochází i `DibiDateTime` atp.)

* Přidán příznak `m:extra` (možnost snadného vlastního rozšíření anotace)

* Upraven `LeanMapper\Result` tak, že při získávání souvisejících dat může volitelně využívat „IN“ nebo „UNION“ strategii (viz jak to řeší NotORM a také viz [tento článek](http://www.xaprb.com/blog/2006/12/07/how-to-select-the-firstleastmax-row-per-group-in-sql/)) – je to důležité pro správné limitování a řazení

* Přidán příznak `m:enum` (podpora pro výčtový typ, například `m:enum(self::STATUS_*))` – thx [@JanTvrdik](http://forum.nette.org/cs/14592-lean-mapper-tenke-orm-nad-dibi#p105080)



## [1.3.1](https://github.com/Tharos/LeanMapper/tree/v1.3.1) (10. 6. 2013)

* Přidána anotace `@property-read` pro definici *read only* položek entity

* V anotacích `@property` a `@property-read` v entitě je nově možné upřesnit, na jaký sloupec v `LeanMapper\Row` se položka mapuje (např. `@property string $bookName (book_name)`)

* Opraveny známé chyby
