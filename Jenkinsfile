node {
	def app
  stage('Checkout'){
  checkout scm  
  echo "build id - ${env.BUILD_ID}"
	}
 
 echo "out of checkout"
 
  stage('build'){
  		echo "in build stage"
  		agent {
        docker {
            image 'maven:3-alpine'
            args '-v $HOME/.m2:/root/.m2'
        }
    }
  		 }
  echo "out of build stage" 
  stage('Docker push'){
   /* First, the incremental build number from Jenkins
         * Second, the 'latest' tag.
         * Pushing multiple tags is cheap, as all the layers are reused. */
         docker.withRegistry('https://068478564052.dkr.ecr.eu-west-2.amazonaws.com', 'ecr:eu-west-2:068478564052') {
         echo "ecr registration success!!!"
         app.push("${env.BUILD_ID}")
         }
 
  }
}