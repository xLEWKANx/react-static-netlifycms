<?php
return [
    [
        'question'  => 'What does Virgil provide to enable end-to-end encryption, authentication, and verification of data?',
        'answer'    => '
        <p>Virgil consists of an open-source encryption library, which implements Cryptographic Message Syntax
                (CMS) and Elliptic Curve Integrated Encryption Scheme (ECIES) (including RSA schema), a Key Management
                API,and a cloud-based Key Management Service (Virgil Keys). The Virgil Keys Service consists of a public
                key service and a private key escrow service.
            </p>
            <p>See our Technical Specifications for the up-to-date list of programming languages and platforms supported
                by our library. Generally all modern platforms and programming languages are supported.
            </p>
        ',
        'is_hidden' => false,
    ],
    [
        'question'  => 'If I send a message to a channel that contains many recipients does it mean that the message will be encrypted as many times as there are recipients in the channel? How does group chat work?',
        'answer'    => '
        <p>No. Only the AES encryption key used to secure the payload (default AES-256) will be re-encrypted for
                each individual recipient. The payload itself will not be re-encrypted.</p>
        ',
        'is_hidden' => false,

    ],
    [
        'question'  => 'Who controls private keys?',
        'answer'    => '
        <p>Developers have full control over how private keys are generated, stored, and synchronized on end-client
                devices. Virgil provides a Private Key Escrow Service that can help backup and synchronize private keys.
            </p>
            Most users are given 3 options: 

            <p><strong>Easy:</strong> In this mode the Virgil Private Key API is used to store private keys associated
                with
                the user/app combo. Virgil stores key in encrypted (not hashed) format; however, we also maintain a
                hashed
                “password” that is used to decrypt the private Key Bundle. This mode is the least secure and requires
                end-users to trust Virgil. It also allows Virgil the ability to reset a user’s Key Bundle password. 
            </p>

            <p><strong>Normal:</strong> End users are given an option to store an encrypted private Key Bundle for
                backup
                and device synchronization purposes. Virgil cannot reset this password and cannot recover the private
                key
                bundle should the user forget the string used to encrypt the bundle. 
            </p>


            <p><strong>Enterprise:</strong> In this mode the developer runs their own Private Key Escrow instance or
                end-users manage their private keys manually. There is nothing stored by Virgil except the corresponding
                public key for each private key.
            </p>',
        'is_hidden' => false,
    ],
    [
        'question'  => 'How many public/private key pairs can each user have?',
        'answer'    => '
        <p>At this time there is no limit. Depending on the application you can and sometimes should generate a new
                public/private key pair as often as “per session”.</p>
        ',
        'is_hidden' => false,
    ],
    [
        'question'  => 'Does Virgil use standard encryption?',
        'answer'    => '<p>Yes. Additional details can be found in our Technical Specification.</p>',
        'is_hidden' => false,

    ],
    [
        'question'  => 'How can I add history to my Twilio IP Messaging channel and maintain end-to-end encryption?',
        'answer'    => '<p>Virgil provides sample application services for Twilio IP Messaging that, at the developer’s discretion,
                run a history service for each channel where this behavior is appropriate. This service effectively
                re-encrypts the history for each user who is authorized to see this information.</p>',
        'is_hidden' => false,
    ],
    [
        'question'  => 'Do I have to pick a specific configuration? For example, if I pick NSA Suite B compliance, will this break compatibility with other users?',
        'answer'    => '
        <p>
                <strong>1. Use case: Web browser with no ability to store private keys between sessions.</strong>
                The user would generate a new private key “per authenticated session” and re-register public key with
                Virgil Public Key Service. Old public and private keys would still be maintained using the Virgil
                Private Key storage API. This is the recommended, default behavior for the IP Messaging use case. – The
                user would retrieve the previously issued private key using the Virgil Private Key API. The key may be
                optionally encrypted using a passphrase or a passcode. The passcode can be delivered using two-factor
                authentication or be a part of a multi-factor authentication process. </p>
            <p>
                <strong>2. Use case: iOS or Android based mobile device.</strong>
                The Virgil Private Key API allows developers to easily implement private key synchronization across
                multiple devices and/or provide a simple recovery mechanism for keys. This service can be run “offline”
                or behind company firewall.
            </p>
        ',
        'is_hidden' => false,
    ],
    [
        'question'  => 'How is the user recovered after their private key is lost from a device?',
        'answer'    => '
        <p>
                <strong>1. Use case: Web browser with no ability to store private keys between sessions.</strong>
                The user would generate a new private key “per authenticated session” and re-register public key with
                Virgil Public Key Service. Old public and private keys would still be maintained using the Virgil
                Private Key storage API. This is the recommended, default behavior for the IP Messaging use case. – The
                user would retrieve the previously issued private key using the Virgil Private Key API. The key may be
                optionally encrypted using a passphrase or a passcode. The passcode can be delivered using two-factor
                authentication or be a part of a multi-factor authentication process. </p>
            <p>
                <strong>2. Use case: iOS or Android based mobile device.</strong>
                The Virgil Private Key API allows developers to easily implement private key synchronization across
                multiple devices and/or provide a simple recovery mechanism for keys. This service can be run “offline”
                or behind company firewall.
            </p>',
        'is_hidden' => false,
    ],
    [
        'question'  => 'How are the user keys revoked?',
        'answer'    => '
        <p>
                <strong>1. Developers can use the API method for key revocation provided by Virgil.</strong>
                This method signs the given public key with an application specific “revoked” key. Developers can
                validate revocation key signatures by signing them with their own key. Revocation requests must be
                signed by the developer or by the end user.
            </p>
            <p>
                <strong> 2. Developers can use a key of their own choosing and define it as “revocation” key.</strong>
                By signing any public record with this key developers can be certain that the key has been revoked.
            </p>
            ',
        'is_hidden' => false,
    ],
    [
        'question'  => 'How are keys synced between multiple devices?',
        'answer'    => '
        <p>
                Private keys can use the Virgil Private Keys Service to securely synchronize their application keys
                across multiple user devices (it works similar to the iCloud Keychain service).
            </p>
            <p>
                Public Keys and the associated signatures are always available using the Virgil Public Keys Service API.
            </p>
        ',
        'is_hidden' => false,
    ],
];
