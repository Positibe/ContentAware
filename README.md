Positibe Publishable Component
==============================

This library provide you some traits to be used in doctrine entities that implement some system of entity that has some content but has not relation with them.
Also provide some interfaces for repositories to create a common management of content aware.

ContentClassAwareTrait
----------------------

    [php]
    namespace Positibe\Component\ContentAware\Entity;

    trait ContentClassAwareTrait {

        /**
         * @var string
         *
         * @ORM\Column(name="content_class", type="string", length=128, nullable=TRUE)
         */
        protected $contentClass;

        public function setContentClassByContent($content)
        {
            $this->contentClass = get_class($content);
        }

        /**
         * @return string
         */
        public function getContentClass()
        {
            return $this->contentClass;
        }

        /**
         * @param string $contentClass
         */
        public function setContentClass($contentClass)
        {
            $this->contentClass = $contentClass;
        }
    }

ContentAwareTrait
-----------------

    [php]
    namespace Positibe\Component\ContentAware\Entity;

    trait ContentAwareTrait
    {
        protected $content;
        use ContentClassAwareTrait;

        public function setContent($content)
        {
            $this->content = $content;
            $this->setContentClassByContent($content);
        }

        public function getContent()
        {
            return $this->content;
        }
    }


ContentAwareInterface
---------------------

This interface is only to know if Repository is of the ContentAware entities

    [php]
    namespace Positibe\Component\ContentAware\Model;

    interface ContentAwareInterface
    {

    }

ContentAwareRepositoryInterface
-------------------------------

    [php]
    namespace Positibe\Component\ContentAware\Model;

    interface ContentAwareRepositoryInterface
    {
        public function findContent($object);
    }

Using php trait
---------------

These are simple php traits so you can use it like that.

    [php]
    namespace Blog\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Positibe\Component\ContentAware\Entity\ContentClassAwareTrait;
    use Positibe\Component\ContentAware\Model\ContentAwareInterface;

    /**
     * @ORM\Table()
     * @ORM\Entity
     */
    class Tags implements ContentAwareInterface
    {
        use ContentClassAwareTrait;

        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;
    }

