node('windows') {
    
  stage('Hello') {
    sh 'echo $PATH'
    sh "which nohup"
    sh "nohup echo Hello world"
    sh "sleep 5; echo Hello world"
    sh "echo Hello world"
  }

    withEnv('PATH+some=C:\\some\\path') {
    }
}

node {
	def app
  stage('Checkout'){
  checkout scm  
 }
 
 echo "out of checkout"
 
  stage('build'){
  		echo "in build stage"
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