$("#alert").click(function () {
    $.sweetModal('This is a basic alert dialog.');
});

$("#youtube").click(function () {
    $.sweetModal({
        title: 'Cat Melissa',
        content: 'https://www.youtube.com/watch?v=EuVPxrrHemY'
    });
});