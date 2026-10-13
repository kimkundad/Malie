<?php

namespace App\Console\Commands;

use App\Support\SpaceKim;
use App\Support\SpaceKimFileExists;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CopyImagesToNewSpace extends Command
{
    protected $signature = 'images:copy-to-new-space
                            {--prefix=malie/ : Source prefix to copy}
                            {--dry-run : List what would be copied without copying}';

    protected $description = 'Copy every image from the do_spaces disk to space-kim, keeping the same paths';

    public function handle()
    {
        $source = Storage::disk('do_spaces');
        $files = $source->allFiles($this->option('prefix'));
        $this->info(count($files).' files found under "'.$this->option('prefix').'"');

        $copied = $skipped = $failed = 0;

        foreach ($files as $file) {
            if ($this->option('dry-run')) {
                $this->line($file);
                $copied++;
                continue;
            }

            try {
                $result = SpaceKim::upload(dirname($file), basename($file), $source->get($file));

                if ($result['path'] !== $file || $result['size'] !== $source->size($file)) {
                    throw new \RuntimeException('stored as '.$result['path'].' ('.$result['size'].' bytes)');
                }

                $copied++;
                $this->line('copied '.$file);
            } catch (SpaceKimFileExists $e) {
                $skipped++;
            } catch (\Throwable $e) {
                $failed++;
                $this->error('failed '.$file.': '.$e->getMessage());
            }
        }

        $this->info("copied: {$copied}, skipped (already there): {$skipped}, failed: {$failed}");

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
