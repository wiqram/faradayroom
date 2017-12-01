node('node') {
	 try {
  stage('Checkout'){
  checkout scm  
  echo "build id - ${env.BUILD_ID}"
  echo 'env.PATH=' + env.PATH
	}
 
 echo "out of checkout"
 
  stage('build'){
  		echo "in build stage"
  		echo "after sh thingy"
        def app = docker.build("predictonomy/repo")
   		echo "docker build succeeded!!!"
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
    catch (err) {

        currentBuild.result = "FAILURE"

            mail body: "project build error is here: ${env.BUILD_URL}" ,
            from: 'xxxx@yyyy.com',
            replyTo: 'yyyy@yyyy.com',
            subject: 'project build failed',
            to: 'zzzz@yyyyy.com'

        throw err
    }
  
  
}