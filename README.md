Coding katas
============

PHP skeleton for doing coding katas
-----------------------------------

A *Code Kata* is a term coined by Dave Thomas.

As in the Japanese concept of kata in the martial arts, it is an exercise in programming which
helps a programmer hone their skills through practice and repetition.

When doing programming katas the developer follows the *TDD* approach. That's why PHPUnit, Mockery, PHPSpec and Prophecy are included as composer dependencies.

Test Cases
==========

Categories manager
------------------
A class with Two methods. The first one to add categories to an XML that takes two arguments: The category to be added and an optional parent where to add it.

If the parent is not set then the category is added as a root node.   And the second that returns the child of given a category.

Numbers to string
-----------------
An algorithm to convert numbers to its corresponding letter in a convertion table. Numbers are separated by a space to identify each letter and words are formed separating groups of numbers by th plus sign.

For instance, '8 1 14+3 1 14 20 1 4 15+2 9 14 7 15' should be converted to 'han cantado bingo'.

Reverse String
--------------
An algorithm to reverse a string.  For instance, 'rose' should be converted to 'esor'.

Nested brackets
---------------
A class to validate whether all the brackets in a string are correctly closed

Magnitud pole
-------------
The magnitud pole of an array is the element which is greater than or equal to all its predecesors and less than or equal to the ones that follow.
