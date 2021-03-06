<?php

declare(strict_types=1);

namespace Orchid\Platform\Events;

use Illuminate\Queue\SerializesModels;
use Orchid\Attachment\Models\Attachment;

/**
 * Class UploadFileEvent.
 */
class UploadFileEvent
{
    use SerializesModels;

    /**
     * @var \Orchid\Attachment\Models\Attachment
     */
    public $attachment;

    /**
     * @var int
     */
    public $time;

    /**
     * ImageAttachment constructor.
     *
     * @param \Orchid\Attachment\Models\Attachment $attachment
     * @param int                                $time
     */
    public function __construct(Attachment $attachment, int $time)
    {
        $this->attachment = $attachment;
        $this->time = $time;
    }
}
