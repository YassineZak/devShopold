#! /bin/bash
# Merge pushes to development branch to stable branch
if [ ! -n $2 ] ; then
    echo "Usage: merge.sh <username> <password>"
    exit 1;
fi

GIT_USER="$1"
GIT_PASS="$2"

# Specify the development branch and stable branch names
FROM_BRANCH="dev-environment"
TO_BRANCH="master"

# Get the current branch
export PAGER=cat
CURRENT_BRANCH=$"dev-environment"
echo "current branch is '$CURRENT_BRANCH'"

# Create the URL to push merge to
URL=$(git remote -v | head -n1 | cut -f2 | cut -d" " -f1)
echo "Repo url is $URL"
PUSH_URL="https://$USERNAME:$PASSWORD@${URL:6}"

if [ "$CURRENT_BRANCH" = "$FROM_BRANCH" ] ; then
    # Checkout the dev branch
    #git checkout $FROM_BRANCH && \
    #echo "Checking out $TO_BRANCH..." && \

    # Checkout the latest stable
    git fetch --all && \
    git checkout $TO_BRANCH && \
    echo $GITHUB_SECRET_TOKEN && \


    # Merge the dev into latest stable
    echo "Merging changes..." && \
    git merge $FROM_BRANCH && \

    # Push changes back to remote vcs
    echo "Pushing changes..." && \
    git push $URL && \
    echo "Merge complete!" || \
    echo "Error Occurred. Merge failed"
else
    echo "Not on $FROM_BRANCH. Skipping merge"
fi