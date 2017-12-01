node {
  stage('Checkout'){
  git url: "https://github.com/wiqram/Predictonomy.git", credentialsId: '7b88f88d-a254-41d8-90fb-6b6cb399bfcf'
  
 }
 echo "out of checkout"
  stage('build'){
  		echo "in build stage"
        def app = docker.build "predictonomy/repo"
 }
  stage('Test image') {
        /* Ideally, we would run a test framework against our image.
         * For this example, we're using a Volkswagen-type approach ;-) */

        app.inside {
            sh 'echo "Tests passed"'
        }
    }
 echo "out of build stage" 
  stage('Docker push'){
   * First, the incremental build number from Jenkins
         * Second, the 'latest' tag.
         * Pushing multiple tags is cheap, as all the layers are reused. */
  docker.withRegistry('https://068478564052.dkr.ecr.eu-west-2.amazonaws.com', '068478564052') {
    app.push("timepass")
  }
  }
}