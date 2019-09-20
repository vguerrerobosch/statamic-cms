<?php

namespace Statamic\Stache\Stores;

use Statamic\Facades\Site;
use Statamic\Facades\YAML;
use Statamic\Facades\Taxonomy;
use Symfony\Component\Finder\SplFileInfo;

class TaxonomiesStore extends BasicStore
{
    protected $storeIndexes = [
        'uri',
    ];

    public function key()
    {
        return 'taxonomies';
    }

    public function getItemKey($item)
    {
        return $item->handle();
    }

    public function getFileFilter(SplFileInfo $file)
    {
        $filename = str_after($file->getPathName(), $this->directory);

        return $file->getExtension() === 'yaml' && substr_count($filename, '/') === 0;
    }

    public function makeItemFromFile($path, $contents)
    {
        $handle = pathinfo($path, PATHINFO_FILENAME);
        $data = YAML::file($path)->parse($contents);

        $sites = array_get($data, 'sites', Site::hasMultiple() ? [] : [Site::default()->handle()]);

        return Taxonomy::make($handle)
            ->title(array_get($data, 'title'))
            ->termBlueprints(array_get($data, 'blueprints'))
            ->revisionsEnabled(array_get($data, 'revisions', false))
            ->searchIndex(array_get($data, 'search_index'))
            ->sites($sites);
    }
}