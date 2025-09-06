$(function () {
    function createProgress(containerId, progressValue) {
        var progressBar = new ProgressBar.Line("#"+containerId, {
            strokeWidth: 2,
            easing: 'easeInOut',
            duration: 1400,
            color: '#909090',
            trailColor: 'transparent',
            trailWidth: 10,
            svgStyle: { width: '100%', height: '100%' }
        });
        progressBar.animate(progressValue);
    }
    createProgress("progress_five", 0.62)
    createProgress("progress_four", 0.21)
    createProgress("progress_three", 0.10)
    createProgress("progress_two", 0.04)
    createProgress("progress_one", 0.04)
});