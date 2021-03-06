<?php namespace Yay\Fixtures;

macro {
    type T_STRING·newtype = T_STRING·basetype;
} >> {
    macro {
        \\(·either(instanceof, ·token(','), ·token('('), ·token(':'))·prec) T_STRING·newtype
    } >> {
        \\(·prec) T_STRING·basetype
    }
}

type Path = string;

function test_type_alias_absolute(Path $p) : Path {
    return 'pass';
}
