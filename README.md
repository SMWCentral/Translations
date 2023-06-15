# SMW Central - Translations
The translation files for [SMW Central](https://www.smwcentral.net/). This repository contains all of the available languages.

## Making a new translation
Anyone can make a translation. There's no need to ask, but we'd appreciate knowing ahead of time! After you're done, send us a pull request or get in touch directly.

To get started, make a copy of the `en-US` directory and name it appropriately (see below). Then, you can start translating.

## Layout
Every directory contains translations for a single language. Directories are named according to the language's [BCP 47 tag](https://en.wikipedia.org/wiki/IETF_language_tag). US English, or `en-US`, is the base for all translations.

All pieces of text are grouped into **namespaces**, where each `.php` file corresponds to a single namespace (for example, all of the English strings in the namespace `pages/section/list` are located in `en-US/pages/section/list.php`).

We refer to an individual piece of text (a **translation string**) using a dot-separated path (a **translation key**) and the namespace. For example, the key `menu.submit.smwhacks` in the `pages/section/list` namespace corresponds to the "Submit a hack" translation string in `en-US/pages/section/list.php` (each dot in the key corresponds to a nested PHP array).

You should be able to figure out where a string appears based on its namespace and key. If in doubt, feel free to ask.

To work with translation files comfortably, it is highly recommended that you read [Arrays](https://www.php.net/manual/en/language.types.array.php) (up to Example #2 is sufficient), [Strings](https://www.php.net/manual/en/language.types.string.php) (especially single- and double-quoted strings), and [Comments](https://www.php.net/manual/en/language.basic-syntax.comments.php) in the PHP manual.

Comments are completely ignored by PHP and do not have any effect on the resulting strings. The English files mainly use comments to indicate a non-obvious Unicode character which has been used in a string; see "Interaction with PHP" below.

The English files contain the authoritative namespaces, keys, and replacements. If a string appears in an English file, it is definitely used somewhere in the site; if a string in an English file uses a given replacement, it's definitely a valid one. For short, the English files will be called the **source files**.

## Strings
Each translation string is a literal PHP string which will be associated with the translation key. Certain translation strings may use special syntax.

### Replacements
Replacements allow including an unknown or dynamic value inside a translated string. Every replacement has a name and is included with the syntax `{name}`. Here's a few examples:

- `user_status.time_banned` in `core`. The site gives this string a formatted date in a replacement named `date`. The English translation uses `{date}` in the translated string (`Banned Until {date}`) to refer to the replacement.
- `news.info` in `pages/main/smwc2`. This string receives two replacements, `username` and `date`. The English translation, `Posted by {username} on {date}`, then uses them.

The exact replacements you can use in a given are determined by the site. A replacement that doesn't actually exist will be ignored. You can use the same replacement more than once. You don't have to use all of the available replacements. For example, translating `news.info` in `pages/main/smwc2` as `Posted by {username} in {forum} by {username}` could result in the text "Posted by JohnDoe in {forum} by JohnDoe". In this case, `{username}` was duplicated, `{date}` wasn't used, and `{forum}` is not valid.

The source translation strings use every availalbe replacement. For example, if a source string uses `{username}` and `{datetime}`, those are the only two replacements your translation can (and should) use.

#### HTML Tags
Replacements are also used to embed HTML into a translation string. For example, `redirection` in `core` (the source string is `Click {link}here{/link} or wait to get redirected…`) can use an opening (with an appropriate URL) and a closing `<a>` tag with the `{link}` and `{/link}` replacements.

For a complex example, see `footer.page_views` in `themes/smwc2`. It receives 3 replacements: the formatted number of page views as `{count}`, an opening `<strong>` tag as `{stats}`, and a closing `</strong>` tag as `{/stats}`. The English string is `Views: {stats}{count}{/stats}`.

The site doesn't validate the placement of HTML tags. It's up to you to make sure they are properly paired.

#### Capitalization
Normally, you refer to a replacement with a tag like `{name}`. However, you can capitalize the first letter by using `{Name}` or make the entire replacement uppercase by using `{NAME}`.

Imagine a string with a replacement called `{object}`, given a value of "messages". Here's how you can include that replacement with different capitalization:
- `I like {object}!` -> `I like messages!` (the value is unchanged)
- `{Object}. That's what I like!` -> `Messages. That's what I like!` (the value's first letter is capitalized)
- `I LOVE {OBJECT}!` -> `I LOVE MESSAGES!` (the entire value is uppercase)

The replacement's name must either be entirely lowercase (no change), entirely uppercase (whole value becomes uppercase), or lowercase with an uppercase first letter (value's first letter becomes uppercase). Any other combinations will be ignored.

### Interaction with PHP
Curly brackets aren't always replacement tags. For example, the source string for `unit.kibibyte` in `core` is `{count}\u{00A0}KiB`. `{count}` here is a replacement, but `{00A0}` isn't.

This particular string uses a double-quoted PHP string. As you can see in the [PHP manual](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double), `\u{...}` has a special meaning in double-quoted strings - it refers to an arbitrary character by its Unicode codepoint. If you search Google for "unicode 00A0", you will see that it is a non-breaking space (a special type of space character which won't separate words on two lines). Essentially, `\u{00A0}` in a double-quoted string is equivalent to directly typing a non-breaking space in any string.

Generally, the English files include Unicode characters directly. For example, `pagination.range` in `themes/smwc2` contains an en dash. The source string of `'{start}–{end}'` can also be written as `"{start}\u{2013}{end}"` (note the double quotes). For convenince, when an English string uses a special Unicode character, its name and codepoint will be mentioned in a comment. For example,`user_bar.serach` in `themes/smwc2` uses an ellipsis character. `'Search…'` is equivalent to `"Search\u{2026}"`.

Translations must be valid UTF-8, so avoid the `\x` and `\0` escape codes when double-quoted strings unless you are absolutely sure what you are doing.

### Pluralization
Every string (with a few exceptions) which receives a `{count}` replacement can use special syntax to specify different strings for different counts, to accommodate singular and plural forms.

The simplest way to specify a plural form is to separate each form with a pipe character (`|`). This is done in `unit.byte` in `core`. Its English value is `{count} byte|{count} bytes` - the first form will be used if `{count}` is 1, while the second will be used for any other numbers. For languages with more than one plural form, you can specify multiple forms, all delimited by pipes. SMW Central's translator is derived from Laravel's translation component and [contains complex rules for many langauges](https://github.com/illuminate/translation/blob/d958f756a92ef8f0222d7c4ceb188d871a82b73c/MessageSelector.php#L110).

If you want more control over the variant which is used, you can use `[number]` or `[start,end]` at the beginning of each form to specify an inclusive range of numbers. Either (or both) of them can be an asterisk (`*`) to denote infinity. For example: `[*,-1] I somehow have a negative amount of apples!|[0] I sadly have no apples.|[1] I only have one apple...|[2,5] I have plenty of apples, let's share some!|[6,*] I have more than six apples, take them all!`. The site will use the first matching form.

For a complex example, see `user_bar.pm` in `themes/smwc2`. Its value is `[0] PM|[*,*] PM {new}{count} new{/new}`. If the count is 0, this will turn into "PM" without including the replacements in the result. For any count other than 0 (`[*,*]` essentially denotes the range `(-Infinity; +Infinity)`), it will show the `count` and wrap it into the HTML tag provided by the `{new}` and `{/new}` replacements (which in this case makes the text yellow).

The special syntax for plural forms applies only to strings which receive a `count`. Pipes and brackets have no special meaning in other strings and will be displayed directly.

The exceptions to pluralization rules are `unit.kibibyte`, `unit.mebibyte`, and `unit.gibibyte` in `core`. In spite of receiving a `count` replacement, they cannot use the pluralization syntax.

## Special strings

### `code.lang` and `code.locale` in `core`
These strings are the language code of the language you're translating to. It's best to leave them alone and let us take care of them.

Both are [BCP 47 tags](https://tools.ietf.org/html/bcp47). `code.lang` only includes a two-letter [ISO 639-2](http://www.loc.gov/standards/iso639-2/php/code_list.php) code, while `code.locale` includes both this code and a two-letter [ISO 3166](https://www.iso.org/obp/ui/#search/code/) region code.

### `language` in `core`
These strings are the translated names of all supported languages. Do not touch them.

### `locale`
The strings in this namespace control language-specific formatting.

The two `number` strings determine how your language formats numbers. `number.decimal` is used as the decimal point, while `number.thousands` is used as the thousands separator. For example, French would use `,` and ` `, respectively.

`calendar.first_day` is the first day of the week. 0 is Sunday, 1 is Monday, etc. All sane languages should set this to 1.

`calendar.short_days` and `calendar.long_days` list the names of each weekday, starting with Sunday.

### Form fields and validation errors
All strings related to form fields have special features (these typically begin with `form.`; the string from the `theme` namespace are also included). We'll use the strings from `pages/pm` as examples.

Use a plain PHP string to only specify a field title. For example:

```php
'form' => [
	'subject' => 'subject'
]
```

This means that the `subject` field will have no description and a title of "subject".

You can instead use a PHP array:

```php
'form' => [
	'subject' => [
		'title' => 'subject'
	]
]
```

This is equivalent to the above example, just a bit more verbose. However, you can now add a description if you so choose:
```php
'form' => [
	'subject' => [
		'title' => 'subject',
		'description' => 'The subject of the PM.'
	]
]
```

With the exception of buttons (such as `form.submit`), all field titles should be lowercase. The title appears capitalized in the form because of `field.title` in `form`, which uses a capitalized replacement.

Some fields, such as the `recipient` field, can have other non-standard strings. These can differ for each field.

When the user enters incorrect data, the default error message is taken from `validation` in the `form` namespace. All strings there will receive the field's title as a replacement, along with any arguments to the validation rule. This is why field title should be lowercase.

If you can't substitute a field's title in one of the generic validation error messages, you can override them on a per-rule, per-field basis by using the array syntax for the field:
```php
'form' => [
	'subject' => [
		'title' => 'subject',
		'between' => [
			'string' => 'That PM\'s subject can\'t be less than {min} or more than {max} characters long!'
		]
	]
]
```

The `subject` field in the PM page uses three validation rules, `required`, `string`, and `between.string`. If the field is left blank, the `required` rule will fail and show the default message (`validation.required`), which is `The subject is required.`. If more than 255 characters are entered into the field, the override (`form.subject.between.string`) will be used, so the message will be `That PM's subject can't be less than 1 or more than 255 characters long!`. If an override didn't exist, `validation.between.string` from `form` would be used instead.

You can have an override for a validation rule which isn't applied on the field, but it will never be used. In the source files, all fields have comments with a list of validation rules they use.

Languages with grammatical gender will likely need to override all messages.

### Section fields
All fields in the sections are described under `field` in the `section` namespace. They're similar to form fields in that a single field can either be a string (to specify a name) or an array (to specify a name, description, etc.).

An example of a simple field is the Demo field in the SMW Hacks section. Its internal name is `smwhacks.demo`:
```php
'field' => [
	'smwhacks' => [
		'demo' => 'Demo'
	]
]
```

The Length field, on the other hand, has a description, so it must use an array:
```php
'field' => [
	'smwhacks' => [
		'length' => [
			'name' => 'Length',
			'description' => 'Number of level exits in the hack.'
		]
	]
]
```

The Type field (internally called `difficulty`) has no description, but it's a multichoice field:
```php
'field' => [
	'smwhacks' => [
		'difficulty' => [
			'name' => 'Type',
			'options' => [
				'easy' => 'Standard: Easy',
				// ...
			]
		]
	]
]
```

Finally, you can add a key named `list` if you want the field to have a different name in the list page. This is useful if the name is long and stretches the table. In the source files, it's used for the Includes GFX field in the SMW Sprites section:
```php
'field' => [
	'smwsprites' => [
		'includesgfx' => [
			'name' => 'Includes GFX',
			'list' => 'GFX'
		]
	]
]
```

Of course, any section field can use any combination of these features.

## Support
Feel free to ask [Telinc1](https://smwc.me/u/15661) if you have any questions.

## Version
The included translation files are split from commit `69bc522` of the SMW Central source code.
