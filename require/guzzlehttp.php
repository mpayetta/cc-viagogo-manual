<?php

require_once __DIR__ . '/vendor/streams/src/StreamInterface.php';
require_once __DIR__ . '/vendor/streams/src/Stream.php';
require_once __DIR__ . '/vendor/streams/src/StreamDecoratorTrait.php';

require_once __DIR__ . '/vendor/guzzle/src/Exception/TransferException.php';
require_once __DIR__ . '/vendor/guzzle/src/Exception/RequestException.php';
require_once __DIR__ . '/vendor/guzzle/src/Exception/BadResponseException.php';
require_once __DIR__ . '/vendor/guzzle/src/Exception/ClientException.php';

require_once __DIR__ . '/vendor/guzzle/src/Event/EventInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/AbstractEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/AbstractRequestEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/BeforeEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/RequestEvents.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/EmitterInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/ListenerAttacherTrait.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/Emitter.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/HasEmitterTrait.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/HasEmitterInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/SubscriberInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/AbstractTransferEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/AbstractRetryableEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/CompleteEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/ErrorEvent.php';
require_once __DIR__ . '/vendor/guzzle/src/Event/EndEvent.php';

require_once __DIR__ . '/vendor/guzzle/src/Subscriber/HttpError.php';
require_once __DIR__ . '/vendor/guzzle/src/Subscriber/Prepare.php';
require_once __DIR__ . '/vendor/guzzle/src/Subscriber/Redirect.php';

require_once __DIR__ . '/vendor/guzzle/src/Message/AppliesHeadersInterface.php';

require_once __DIR__ . '/vendor/guzzle/src/Post/PostFileInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Post/PostFile.php';
require_once __DIR__ . '/vendor/guzzle/src/Post/PostBodyInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Post/PostBody.php';

require_once __DIR__ . '/vendor/guzzle/src/Message/MessageInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/RequestInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/ResponseInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/FutureResponse.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/AbstractMessage.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/Request.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/Response.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/MessageFactoryInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Message/MessageFactory.php';

require_once __DIR__ . '/vendor/guzzle/src/Transaction.php';
require_once __DIR__ . '/vendor/guzzle/src/HasDataTrait.php';
require_once __DIR__ . '/vendor/guzzle/src/ToArrayInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/Collection.php';
require_once __DIR__ . '/vendor/guzzle/src/RequestFsm.php';
require_once __DIR__ . '/vendor/guzzle/src/ClientInterface.php';
require_once __DIR__ . '/vendor/guzzle/src/RingBridge.php';
require_once __DIR__ . '/vendor/guzzle/src/QueryParser.php';
require_once __DIR__ . '/vendor/guzzle/src/Query.php';
require_once __DIR__ . '/vendor/guzzle/src/Url.php';
require_once __DIR__ . '/vendor/guzzle/src/Utils.php';
require_once __DIR__ . '/vendor/guzzle/src/Client.php';

?>