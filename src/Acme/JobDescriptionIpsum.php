<?php

namespace Acme;

class JobDescriptionIpsum
{
    public function description()
    {
        return $this->title()
            . $this->responsibilities()
            . $this->duties()
            . $this->skillsQualifications();
    }

    public function title()
    {
        return '<h1>' . ucwords($this->words(4)) . '</h1>';
    }

    public function responsibilities()
    {
        return $this->paragraph('p');
    }

    public function duties()
    {
        return '<ul>' . $this->paragraphs(5, 'li') . '</ul>';
    }

    public function skillsQualifications()
    {
        return $this->paragraph('p');
    }

    public function word($tags = false)
    {
        return $this->words(1, $tags);
    }

    public function wordsArray($count = 1, $tags = false)
    {
        return $this->words($count, $tags, true);
    }

    public function words($count = 1, $tags = false, $array = false)
    {
        $words = [];
        $wordCount = 0;

        while ($wordCount < $count) {
            $shuffle = true;

            while($shuffle) {
                $this->shuffle();

                if (!$wordCount || $words[($wordCount - 1)] != $this->words[0]) {
                    $words = array_merge($words, $this->words);
                    $wordCount = count($words);
                    $shuffle = false;
                }
            }
        }

        $words = array_slice($words, 0, $count);

        return $this->output($words, $tags, $array);
    }

    public function sentence($tags = false)
    {
        return $this->sentences(1, $tags);
    }

    public function sentancesArray($count = 1, $tags = false)
    {
        return $this->sentences($count, $tags, true);
    }

    public function sentences($count, $tags = false, $array = false)
    {
        $sentences = [];

        for ($i = 0; $i < $count; $i++) {
            $sentences[] = $this->wordsArray($this->gauss(12.46, 5.08));
        }

        $this->punctuate($sentences);

        return $this->output($sentences, $tags, $array);
    }

    public function paragraph($tags = false)
    {
        return $this->paragraphs(1, $tags);
    }

    public function paragraphsArray($count = 1, $tags = false)
    {
        return $this->paragraphs($count, $tags, true);
    }

    public function paragraphs($count, $tags = false, $array = false)
    {
        $paragraphs = [];

        for ($i = 0; $i < $count; $i++) {
            $paragraphs[] = $this->sentences($this->gauss(5.8, 1.93));
        }

        return $this->output($paragraphs, $tags, $array, "\n\n");
    }

    private function gauss($mean, $stdDeviation)
    {
        $x = mt_rand() / mt_getrandmax();
        $y = mt_rand() / mt_getrandmax();
        $z = sqrt(-2 * log($x)) * cos(2 * pi() * $y);

        return $z * $stdDeviation + $mean;
    }

    private function shuffle()
    {
        shuffle($this->words);
    }

    private function punctuate(&$sentances)
    {
        foreach ($sentances as $key => $sentance) {
            $words = count($sentance);

            if (4 < $words) {
                $mean = log($words, 6);
                $stdDeviation = $mean / 6;
                $commas = round($this->gauss($mean, $stdDeviation));

                for ($i = 1; $i <= $commas; $i++) {
                    $word = round($i * $words / ($commas + 1));

                    if ($word < ($words - 1) && 0 < $word) {
                        $sentance[$word] .= ',';
                    }
                }
            }

            $sentances[$key] = ucfirst(implode(' ', $sentance) . '.');
        }
    }

    private function output($strings, $tags, $array, $delimiter = ' ')
    {
        if ($tags) {
            if (!is_array($tags)) {
                $tags = [$tags];
            }
            else {
                $tags = array_reverse($tags);
            }

            foreach ($strings as $key => $string)
            {
                foreach ($tags as $tag) {
                    if ('<' == $tag[0]) {
                        $string = str_replace('$1', $string, $tag);
                    } else {
                        $string = sprintf('<%1$s>%2$s</%1$s>', $tag, $string);
                    }

                    $strings[$key] = $string;
                }
            }
        }

        if (!$array) {
            $strings = implode($delimiter, $strings);
        }

        return $strings;
    }

    public $words = [
        'develops', 'new', 'business', 'by',
        'analyzing', 'account', 'potential', 'initiating',
        'developing', 'and', 'closing', 'sales',
        'recommending', 'applications', 'strategies', 'identifies',
        'development', 'in', 'accounts', 'studying',
        'current', 'interviewing', 'key', 'customer',
        'personnel', 'company', 'who', 'have',
        'worked', 'with', 'identifying', 'evaluating',
        'additional', 'needs', 'opportunities', 'initiates',
        'process', 'building', 'relationships', 'qualifying',
        'scheduling', 'appointments', 'making', 'initial',
        'presentation', 'explaining', 'product', 'service',
        'enhancements', 'additions', 'introducing', 'products',
        'services', 'preparing', 'specifications', 'conferring',
        'engineering', 'closes', 'overcoming', 'objections',
        'contracts', 'contributes', 'information', 'to',
        'results', 'be', 'filled', 'monitoring',
        'competitive', 'relaying', 'reactions', 'updates',
        'job', 'knowledge', 'participating', 'educational',
        'reading', 'professional', 'publications', 'maintaining',
        'personal', 'networks', 'organizations', 'enhances',
        'department', 'organization', 'reputation', 'accepting',
        'ownership', 'for', 'accomplishing', 'different',
        'requests', 'exploring', 'add', 'value',
        'accomplishments', 'clientbase', 'establishes', 'partnershipsalliances',
        'prospecting', 'skills', 'meeting', 'goals',
        'foster', 'teamwork', 'planning', 'people',
        'initiative', 'focus', 'emphasizing', 'excellence',
        'generates', 'revenue', 'market', 'through',
        'forecasting', 'lead', 'generation', 'qualification',
        'understanding', 'requirements', 'rapport', 'capabilities',
        'expands', 'existing', 'strategy', 'from',
        'recommends', 'accomplishes', 'marketing', 'mission',
        'completing', 'related', 'as', 'needed',
        'internal', 'communications', 'informing', 'others',
        'verbal', 'communication', 'motivation', 'territory',
        'management', 'persistence', 'serves', 'customers',
        'enrollments', 'conversion', 'mailings', 'responding',
        'resolving', 'complaints', 'quality', 'prepares',
        'work', 'processed', 'gathering', 'sorting',
        'organizing', 'recording', 'data', 'documents',
        'completes', 'auditing', 'tapes', 'transmissions',
        'researching', 'processing', 'problems', 'coordinating',
        'plans', 'provides', 'collecting', 'summarizing',
        'resolves', 'investigating', 'issues', 'composing',
        'responses', 'referring', 'nonstandard', 'complains',
        'lawsuits', 'legal', 'or', 'government',
        'affairs', 'departments', 'maintains', 'standards',
        'advising', 'supervisor', 'of', 'reports',
        'reporting', 'thoroughness', 'attention', 'detail',
        'research', 'problem', 'solving', 'proactive',
        'dependability', 'general', 'math', 'financial',
        'accounting', 'asset', 'liability', 'capital',
        'entries', 'compiling', 'transactions', 'entering',
        'actions', 'options', 'summarizes', 'status',
        'balance', 'sheet', 'profit', 'loss',
        'statement', 'other', 'substantiates', 'controls',
        'policies', 'procedures', 'guides', 'clerical',
        'staff', 'activities', 'answering', 'questions',
        'reconciles', 'discrepancies', 'secures', 'base',
        'backups', 'security', 'following', 'payments',
        'verifying', 'documentation', 'requesting', 'disbursements',
        'answers', 'procedure', 'interpreting', 'policy',
        'regulations', 'complies', 'federal', 'state',
        'local', 'legislation', 'enforcing', 'adherence',
        'on', 'special', 'trends', 'confidence',
        'protects', 'operations', 'keeping', 'confidential',
        'technical', 'attending', 'workshops', 'reviewing',
        'establishing', 'societies', 'the', 'result',
        'performing', 'duty', 'team', 'effort',
        'corporate', 'finance', 'deadlineoriented', 'sfas',
        'rules', 'confidentiality', 'time', 'entry',
        'creates', 'user', 'solutions', 'implementing',
        'internetintranet', 'leading', 'developers', 'defines',
        'site', 'objectives', 'envisioning', 'system',
        'features', 'functionality', 'designs', 'interfaces',
        'setting', 'expectations', 'priorities', 'throughout',
        'life', 'cycle', 'determining', 'design',
        'methodologies', 'tool', 'sets', 'programming',
        'using', 'languages', 'software', 'designing',
        'conducting', 'tests', 'comparing', 'advantages',
        'disadvantages', 'custom', 'purchase', 'alternatives',
        'integrates', 'database', 'architecture', 'server',
        'scripting', 'connectivity', 'network', 'systems',
        'search', 'engines', 'servers', 'multimedia',
        'authoring', 'tools', 'schedules', 'contributing',
        'meetings', 'troubleshooting', 'production', 'across',
        'multiple', 'environments', 'operating', 'platforms',
        'supports', 'users', 'assistance', 'technologies',
        'web', 'application', 'providing', 'advice',
        'coaching', 'interface', 'fundamentals', 'objectoriented',
        'ood', 'content', 'debugging', 'leadership',
        'written',
    ];
}
