console.log('loaded main.js');

const checkForServiceWorker = () => {
    if (!('serviceWorker' in navigator)) {
        throw new Error('No Service Worker support!')
    }
    if (!('PushManager' in window)) {
        throw new Error('No Push API Support!')
    }
}

const registerServiceWorker = async () => {
    const swRegistration = await navigator.serviceWorker.register('sw.js');
    return swRegistration;
}

const requestNotificationPermission = async () => {
    const permission = await window.Notification.requestPermission();
    if (permission !== 'granted') {
        throw new Error('Permission not granted for Notification');
    }
}

const showLocalNotification = (title, body, swRegistration) => {
    const options = {
        body,
        // here you can add more properties like icon, image, vibrate, etc.
    };
    swRegistration.showNotification(title, options);
}

const main = async () => {
    checkForServiceWorker();
    // reg service worker
    const swRegistration = await registerServiceWorker();
    // request push notification permissions
    const permission = await requestNotificationPermission();
    // test push notification
    showLocalNotification('Test Notification', 'this is a message', swRegistration);
}
