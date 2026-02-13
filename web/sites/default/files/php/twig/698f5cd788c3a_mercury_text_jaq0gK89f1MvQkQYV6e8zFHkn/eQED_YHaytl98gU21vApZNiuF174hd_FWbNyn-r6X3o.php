<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* mercury:text */
class __TwigTemplate_1c25a14d0aef1feb0d759f0c524bfcc3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.mercury--text"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "mercury:text"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "mercury:text"));
        // line 2
        $context["text_text_color"] = ((array_key_exists("text_color", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_color"] ?? null), "default")) : ("default"));
        // line 3
        $context["text_text_size"] = ((array_key_exists("text_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_size"] ?? null), "normal")) : ("normal"));
        // line 4
        yield "
";
        // line 5
        $context["text_component"] = Twig\Extra\Html\HtmlExtension::htmlCva(["[&_h2]:mt-8 [&_h2]:mb-6 [&_h3]:mt-6 [&_h3]:mb-4 [&_h4]:mt-4 [&_h4]:mb-2 [&_h5]:my-2 [&_h6]:my-2", "[&_li]:mb-1 [&_ol]:my-4 [&_ol]:list-decimal [&_ul]:my-4", "[&>*:first-child]:mt-0 [&>*:last-child]:mb-0", "[&_a]:underline [&_a]:underline-offset-2", "[&_table]:my-6", "[&_td]:p-3 [&_th]:p-3", "[&_tr]:border-b [&_tr]:border-b-border/40", "[&_blockquote]:xl:3xl [&_blockquote]:text-xl [&_blockquote]:italic [&_blockquote]:md:text-2xl", "[&_blockquote]:my-8 [&_blockquote]:border-l-4 [&_blockquote]:border-border/40 [&_blockquote]:pl-4", "[&_figure]:my-6 [&_figure]:w-fit", "[&_figcaption]:block [&_figcaption]:pt-2 [&_figcaption]:pb-3 [&_figcaption]:text-sm [&_figcaption]:opacity-80 [&_figcaption]:lg:text-base"], ["textColor" => ["default" => "text-foreground [&_a]:hover:text-foreground/70", "inverted" => "text-background [&_a]:hover:text-background/70", "primary" => "text-primary [&_a]:hover:text-primary/70"], "textSize" => ["text-xs" => "text-xs md:text-sm xl:text-md", "text-sm" => "text-sm md:text-md xl:text-lg", "normal" => "text-base md:text-lg xl:text-xl", "text-lg" => "text-lg md:text-xl xl:text-2xl", "text-xl" => "text-xl md:text-2xl xl:text-3xl", "text-2xl" => "text-2xl md:text-3xl xl:text-4xl", "text-3xl" => "text-3xl md:text-4xl xl:text-5xl"]]);
        // line 38
        yield "
";
        // line 39
        $context["text_classes"] = CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["text_component"] ?? null), "apply", [["textColor" =>         // line 41
($context["text_text_color"] ?? null), "textSize" =>         // line 42
($context["text_text_size"] ?? null)]], "method", false, false, true, 40);
        // line 45
        yield "
<div class=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text_classes"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 47
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "text");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("text", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "text");
            }
        }
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["text_color", "text_size", "text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mercury:text";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 47,  68 => 46,  65 => 45,  63 => 42,  62 => 41,  61 => 40,  60 => 39,  57 => 38,  55 => 5,  52 => 4,  50 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "mercury:text", "themes/contrib/mercury/components/text/text.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2];
        static $filters = ["default" => 2, "escape" => 46];
        static $functions = ["html_cva" => 6];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['default', 'escape'],
                ['html_cva'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
