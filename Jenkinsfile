node {
	def app
  stage('Checkout'){
  checkout scm  
  echo "build id - ${env.BUILD_ID}"
	}
 
 echo "out of checkout"
 
  stage('build'){
  		echo "in build stage"
  		sh 'node --version'
        app = docker.build("predictonomy/repo")
 }
  echo "out of build stage" 
  stage('Docker push'){
   /* First, the incremental build number from Jenkins
         * Second, the 'latest' tag.
         * Pushing multiple tags is cheap, as all the layers are reused. */
  docker.withRegistry('https://068478564052.dkr.ecr.eu-west-2.amazonaws.com', '068478564052') {
    app.push("timepass")
  }
  }
}