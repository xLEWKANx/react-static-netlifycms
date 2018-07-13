
import React from 'react';
import anime from 'animejs';

export default class AboutPage extends React.Component {
    componentDidMount() {

        anime({
            targets: document.querySelector('#about path'),
            strokeDashoffset: [anime.setDashoffset, 0],
            easing: 'easeInOutSine',
            duration: 1500,
            delay: 1000,
            direction: 'alternate',
            loop: false
        });

    }

    render() {
        return (
            <div id="about">
                <h1>This is what we're all about.</h1>
                <p>React, static sites, performance, speed. It's the stuff that makes us tick.</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="144.875" height="46.875" viewBox="0 0 144.875 46.875">
                    <path id="logo" fill="white" stroke="#000" d="M86.017 16.286l-.591.394-1.29 1.289.464.465-.538.537 1.022 1.02-.538.537-1.021-1.021-.537.537 1.021 1.02-.537.537-1.021-1.021-.538.537 1.021 1.02-.537.537-1.022-1.02-.537.537 1.021 1.02-.537.537-1.022-1.017-.717.716 1.021 1.02-.538.537-1.021-1.02-4.21 4.207-3.082-3.1-1.917.967 2.634 2.632-4.5 4.494a33.21 33.21 0 0 0-17.236.072L46.26 28.8l2.706-2.7-1.917-.967-3.082 3.061-4.228-4.207-1.021 1.02-.538-.537 1.021-1.02-.717-.716-1.021 1.02-.538-.537 1.021-1.02-.537-.537-1.021 1.02-.538-.54 1.021-1.02-.537-.537-1 1.039-.538-.537 1.021-1.02-.538-.537-1.021 1.02-.538-.537 1.021-1.02-.541-.539.466-.466-1.236-1.235-.538-.537a2.29 2.29 0 0 0-2.2.519 1.9 1.9 0 0 0-.394 2.095l1.666 1.88.448-.448 9.729 9.757-2.761 2.758.968 1.916 1.774-1.772 4.909 4.906V47.8a25.479 25.479 0 0 0 1.792 4.512l-6.378 6.374-.126 3.814h.466l-.019-3.5 6.306-6.23a21.893 21.893 0 0 0 2.813 4.046L46.206 62.5H42.3v.483h4.228l5.68-5.783a16.894 16.894 0 0 0 7.077 4.583 18.361 18.361 0 0 0 7.041-4.619l5.751 5.747 4.229.089v-.487h-3.924l-5.7-5.747a23.121 23.121 0 0 0 2.866-4.046l6.343 6.338-.018 3.42h.466l.018-3.76-6.54-6.446a35.4 35.4 0 0 0 1.864-4.154c0-3.241-.036-7.3-.072-10.259l5.035-5.031 1.845 1.844.968-1.916L76.7 30l9.747-9.74.448.448 1.774-1.773a2.537 2.537 0 0 0-.555-2.238 1.917 1.917 0 0 0-2.097-.411zM47.03 34.476v2.632l-4.55-4.548 3.422-3.42 4.264 4.26a29.746 29.746 0 0 0-3.135 1.074zm12.255 24.6c-4.479-1.432-8.08-5.443-9.89-11.566V36.123s9.693-4.512 19.816 0c0 1.593.036 7.591.036 11.637-2.025 5.425-4.73 9.364-9.962 11.315zm12.291-21.932c-.018-1.182-.018-2.112-.018-2.668a30.237 30.237 0 0 0-3.046-1.146l4.3-4.3 3.422 3.42-4.658 4.691zm-10.535 8.862a2.813 2.813 0 0 0 1.111-2.148 2.741 2.741 0 0 0-5.482 0 2.707 2.707 0 0 0 1.111 2.148c-.09.627-.358 2.291-.574 3.473a.576.576 0 0 0 .108.412.5.5 0 0 0 .376.179l1.7-.018 1.72.018a.5.5 0 0 0 .376-.179.472.472 0 0 0 .108-.412c-.2-1.164-.484-2.847-.555-3.473zm-.52 3.061h-2.257c.591-3.437.573-3.455.34-3.67-.018-.018-.054-.035-.071-.053a1.794 1.794 0 0 1-.9-1.486 1.756 1.756 0 0 1 3.512 0 1.8 1.8 0 0 1-.9 1.486.252.252 0 0 0-.072.053c-.233.233-.251.233.34 3.67zm59.941 3.217h-1.4a1.412 1.412 0 0 1 0-2.823h2.886v-1.313H118.9a2.673 2.673 0 0 0-2.644 2.708 2.731 2.731 0 0 0 2.644 2.774h1.323a1.42 1.42 0 1 1 0 2.839h-3.453v1.4h3.709a2.8 2.8 0 0 0 2.709-2.823 2.764 2.764 0 0 0-2.725-2.757zm5.74.886h3.983v-1.33H126.2v-2.346h4.176v-1.362H124.8v9.732h5.66v-1.4h-4.26v-3.3zm5.579-.164a4.962 4.962 0 0 0 4.9 5.022 4.849 4.849 0 0 0 1.693-.312v-1.575a3.193 3.193 0 0 1-1.693.492 3.661 3.661 0 0 1 0-7.3 3.2 3.2 0 0 1 1.693.492V48.23a4.844 4.844 0 0 0-1.693-.312 5.03 5.03 0 0 0-4.9 5.087zm13.706 1.756a1.895 1.895 0 1 1-3.789 0v-6.63h-1.387v6.63a3.282 3.282 0 1 0 6.563 0v-6.63h-1.387v6.63zm10.224-3.184a3.435 3.435 0 0 0-3.6-3.446h-3.1v9.732h1.4v-2.856h1.693a2.374 2.374 0 0 1 2.177 2.445v.41h1.419v-.41a3.36 3.36 0 0 0-1.6-3.069 3.237 3.237 0 0 0 1.6-2.806zm-3.435 2.183h-1.854v-4.382h1.854a2.2 2.2 0 0 1 0 4.382zm5.482 4.086h1.387v-9.731h-1.387v9.732zm3-8.354h2.37v8.37h1.387v-8.37h2.37v-1.361h-6.111v1.362h-.016zm12.69-1.362l-2.1 4.218-2.1-4.218H167.7l2.951 5.629v4.1h1.387v-4.1L175 48.132h-1.548zm-54.163-20.858h-2.612v18.2h2.612v-18.2zM132.75 45.49h2.66v-.755a6.318 6.318 0 0 0-3-5.744 6 6 0 0 0 3-5.252 6.424 6.424 0 0 0-6.724-6.45h-5.805v18.2h2.628v-5.333h3.177c2.613 0 4.064 2.577 4.064 4.579v.755zm-3.774-7.681h-3.467V29.62h3.484a3.972 3.972 0 0 1 3.708 4.1 4.025 4.025 0 0 1-3.725 4.087zm17.448-2.839v2.445h6.595a6.015 6.015 0 0 1-6.37 5.793 6.626 6.626 0 0 1-6.369-6.808 6.634 6.634 0 0 1 6.369-6.843 6.253 6.253 0 0 1 5.16 2.855c0 .033 2.177-1.69 2.177-1.69a9.11 9.11 0 0 0-7.337-3.775 9.432 9.432 0 0 0 0 18.857 9.121 9.121 0 0 0 9.175-9.42 10.342 10.342 0 0 0-.1-1.428h-9.3v.014zm14.77-7.7h-2.612v18.2h2.612v-18.2zm13.5 15.607h-7.324V27.273h-2.612v18.2h9.933V42.88zm-72.224 6.089l-8.192-21.7H90.47L102.5 57.5l12.029-30.23h-3.579l-8.482 21.7z" transform="translate(-30.125 -16.125)" />
                </svg>
            </div>
        );
    }
}
