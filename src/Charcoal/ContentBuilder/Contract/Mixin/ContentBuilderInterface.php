<?php

namespace Charcoal\ContentBuilder\Contract\Mixin;

// from `charcoal-model`
use Charcoal\Model\Collection;
use Charcoal\Model\ModelInterface;

// from `charcoal-attachment`
use Charcoal\Attachment\Object\Attachment;
use Charcoal\Attachment\Interfaces\AttachableInterface;

/**
 * Interface ContentBuilderInterface
 * @package ContentBuilder\Contract\Mixin
 */
interface ContentBuilderInterface
{
    /**
     * Attach a node to the current object.
     *
     * @param  AttachableInterface|ModelInterface $attachment An attachment or object.
     * @param  string                             $group      Attachment group, defaults to contents.
     * @return boolean|self
     */
    public function addAttachment($attachment, $group = 'contents');

    /**
     * Retrieve the objects associated to the current object.
     *
     * @param  array|string|null $group  Filter the attachments by a group identifier.
     *                                   When an array, filter the attachments by a options list.
     * @param  string|null       $type   Filter the attachments by type.
     * @param  callable|null     $before Process each attachment before applying data.
     * @param  callable|null     $after  Process each attachment after applying data.
     * @throws \InvalidArgumentException If the $group or $type is invalid.
     * @return Collection|Attachment[]
     */
    public function attachments($group = null, $type = null, callable $before = null, callable $after = null);
}
