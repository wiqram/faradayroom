node {
  stage('Checkout'){
  git url: "https://github.com/wiqram/Predictonomy.git", credentialsId: '7b88f88d-a254-41d8-90fb-6b6cb399bfcf'
  //sh "git rev-parse HEAD > .git/commit-id"
  //sh "printenv"
	//def commit_id = readFile('.git/commit-id').trim()
	//echo "${commit_id}"
 }
 echo "out of checkout"
  stage('build'){
  		echo "in build stage"
        def app = docker.build "predictonomy/repo"
 }
 echo "out of build stage" 
  stage('Docker push'){
  docker.withRegistry('https://068478564052.dkr.ecr.eu-west-2.amazonaws.com', '068478564052') {
    docker.image('predictonomy/repo').push("timepass")
  }
  }
}