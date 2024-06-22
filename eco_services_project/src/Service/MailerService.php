<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendRegistrationEmail($toEmail, $lastname)
    {
        $email = (new Email())
            ->from('ernestdossa.9@gmail.com')
            ->to($toEmail)
            ->subject('Bienvenue chez EcoService')
            ->text('Cher ' .$lastname . ' nous vous souhaitons la bienvenue! 
                    Nous sommes ravis de vous compter parmi nos 
                    clients et nous tenons à vous remercier pour votre inscription.')
            ->html(
                'Cher ' .$lastname . ' nous vous souhaitons la bienvenue! 
                    Nous sommes ravis de vous compter parmi nos 
                    clients et nous tenons à vous remercier pour votre inscription.'
            );

        $this->mailer->send($email);
    }

    public function sendQuoteRequestEmail($toEmail)
    {
        $email = (new Email())
            ->from('ernestdossa.9@gmail.com')
            ->to($toEmail)
            ->subject('Bienvenue chez EcoService')
            ->text('Nous avons bien reçu votre demande de devis et nous vous remercions 
                    de l\'intérêt que vous portez à Eco-Services
                    Notre équipe étudie actuellement votre demande avec attention et 
                    nous reviendrons vers vous dans les plus brefs délais pour vous fournir 
                    une réponse détaillée et adaptée à vos besoins.')
            ->html(
                'Nous avons bien reçu votre demande de devis et nous vous remercions 
                    de l\'intérêt que vous portez à Eco-Services
                    Notre équipe étudie actuellement votre demande avec attention et 
                    nous reviendrons vers vous dans les plus brefs délais pour vous fournir 
                    une réponse détaillée et adaptée à vos besoins.'
            );

        $this->mailer->send($email);
    }
}