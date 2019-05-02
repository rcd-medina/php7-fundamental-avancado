<?php

// ====================================================================================================
// Declaração em 1 nível, ou seja.
// ====================================================================================================
namespace NameSpaceX
{
    class ClasseTeste
    {
        public function quemSouEu()
        {
            echo "<h1>Sou a ClasseTeste do NameSpaceX</h1>";
        }
    }
}

// ====================================================================================================
// Declaração em 1 nível, ou seja.
// ====================================================================================================
namespace NameSpaceY
{
    class ClasseTeste
    {
        public function quemSoueu()
        {
            echo "<h1>Sou a ClasseTeste do NameSpaceY</h1>";
        }
    }
}

// ====================================================================================================
// 
// ====================================================================================================
namespace {
    use NameSpaceY\ClasseTeste;
    $c = new ClasseTeste;
    $c->quemSouEu();
}

// ====================================================================================================
// Declaração em 2 níveis, ou seja, a classe está dentro de NameSpaceX, que por sua vez está dentro
// do namespace Classes.
// Classes\NamespaceX\ClasseTeste
// ====================================================================================================
namespace Classes\NamespaceX
{
    class ClasseTeste
    {
        public function quemSouEu()
        {
            echo "<h1>Sou a ClasseTeste do NameSpaceX</h1>";
            echo __NAMESPACE__;
            echo "<br>";
        }
    }
}

namespace
{
    use Classes\NameSpaceX\ClasseTeste;
    $c = new ClasseTeste();
    $c->quemSouEu();
}


