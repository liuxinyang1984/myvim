<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'braces_position' => [
            'classes_opening_brace'         => 'same_line',  // 类的大括号
            'functions_opening_brace'       => 'same_line',  // 函数的大括号
            'control_structures_opening_brace' => 'same_line'  // 控制结构的大括号
        ],
        'control_structure_continuation_position' => [
            'position' => 'same_line'  // 控制结构条件语句的换行方式
        ],
        'no_extra_blank_lines' => [
            'tokens' => ['curly_brace_block']  // 禁止在大括号前有空行
        ]
    ]);
