<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            // added packages
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),      
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Payum\Bundle\PayumBundle\PayumBundle(),
            //core application
            new FreelancerTools\CoreBundle\FreelancerToolsCoreBundle(),
            new FreelancerTools\TimeTrackerBundle\FreelancerToolsTimeTrackerBundle(),
            new FreelancerTools\ReportBundle\FreelancerToolsReportBundle(),
            new FreelancerTools\InvoicingBundle\FreelancerToolsInvoicingBundle(),
            new FreelancerTools\PaymentBundle\FreelancerToolsPaymentBundle(),
            new FreelancerTools\FrontendBundle\FreelancerToolsFrontendBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {            
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
